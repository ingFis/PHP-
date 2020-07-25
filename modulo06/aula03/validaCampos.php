<?php

//CREATE: INSERINDO DADOS COM PDO - PDOSTATEMENT - segurança - montar aos poucos a query e depois executar

     require 'config.php';
     require_once('dao/UsuarioDaoMysql.php');
     require_once('models/Usuario.php');

     $usuarioDaoMysql = new UsuarioDaoMysql($pdo);
     

     $nome = filter_input(INPUT_POST, "nome");
     $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);

     if($nome && $email){

          //CRIANDO UM DAO NA PRÁTICA (3/5)
          if(!($usuarioDaoMysql->findByEmail($email))){
               $usuario = new Usuario();
               $usuario->setNome($nome);
               $usuario->setEmail($email);

               $usuarioDaoMysql->add($usuario);
          
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