<?php

     //CRIANDO UM DAO NA PRÁTICA (5/5)

     require('config.php');
     require_once('dao/UsuariodaoMysql.php');

     $usuarioDaoMysql = new UsuarioDaoMysql($pdo);

     $id = filter_input(INPUT_GET, 'id');

     if($id){
          $usuarioDaoMysql->delete($id);
     }

     header('location: index.php');
     exit;
?>