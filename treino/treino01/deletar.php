<?php

     require_once('config.php');
     require_once('dao/UsuarioDaoMysql.php');

     $usuarioDaoMysql = new UsuarioDaoMysql($pdo);

     $id = filter_input(INPUT_GET, 'id');

     if($id){
          $usuarioDaoMysql->delete($id);
     }

     header('location: index.php');
     exit;
?>