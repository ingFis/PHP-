<?php

     //CRIANDO UM DAO NA PRÁTICA (4/5)

     require 'config.php';
     require_once('models/Usuario.php');
     require_once('dao/UsuarioDaoMysql.php');

     $usuarioDaoMysql = new UsuarioDaoMysql($pdo);

     $id = filter_input(INPUT_GET, "id");
     $nome = filter_input(INPUT_POST, "nome");
     $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);

     if($nome && $email && $id){

          $usuario = $usuarioDaoMysql->findById($id);
          $usuario->setNome($nome);
          $usuario->setEmail($email);
          $usuarioDaoMysql->update($usuario);

          header('location: index.php');
          exit;
          
     }else{
          header('location: editar.php?id='.$id);
          exit;
     }

?>