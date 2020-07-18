<?php

//CREATE: INSERINDO DADOS COM PDO - PDOSTATEMENT - segurança - montar aos poucos a query e depois executar

     require 'config.php';

     $nome = filter_input(INPUT_POST, "nome");
     $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);

     if($nome && $email){

          //CREATE: valida entrada de email
          $sql = $pdo->prepare("SELECT * FROM usuarios WHERE email=:email");
          $sql->bindValue(':email', $email);
          $sql->execute();

          if($sql->rowCount() === 0){
               //CREATE: template - monta a query
               $sql = $pdo->prepare("INSERT INTO usuarios (nome, email) VALUES (:nome, :email)");
          
               
               //CREATE: associação de cada item - bindValue(passo o valor) - bindValue(passa a variavel(se mudar muda também))
               $sql->bindValue(':nome', $nome); //faz procedimentos de segurança
               $sql->bindValue(':email', $email);

               //CREATE: executa a query
               $sql->execute();
          
               header('location: index.php');
               exit;
          }else{
               header('location: adicionar.php');
               exit;
          }

     }else{
          header('location: adicionar.php');
          exit;
     }

?>