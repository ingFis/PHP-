<?php

     require_once('config.php');
     require_once('dao/UsuarioDaoMysql.php');

     $usuarioDaoMysql = new UsuarioDaoMysql($pdo);

     $id = filter_input(INPUT_GET, 'id');
     $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
     $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);


     if($nome && $email){
          $usuario = $usuarioDaoMysql->findById($id);

          $usuario->setNome($nome);
          $usuario->setEmail($email);
          $usuarioDaoMysql->update($usuario);

          header('location: index.php');
          exit;
     }else{
          header('location: editar.php');
          exit;
     }


?>