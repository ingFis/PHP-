<?php
     require('config.php');
     require_once('dao/UsuarioDaoMysql.php');

     $usuarioDaoMysql = new UsuarioDaoMysql($pdo);

     $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
     $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

     if($nome && $email){
          if($usuarioDaoMysql->findByEmail($email) === FALSE){
               $usuario = new Usuario();
               $usuario->setNome($nome);
               $usuario->setEmail($email);
               $usuarioDaoMysql->add($usuario);

               header('location: index.php');
               exit;
          }
     }else{
          header('location: adicionarUsuario.php');
          exit;
     }

?>