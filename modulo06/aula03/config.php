<?php

     $dbName = 'test';
     $dbHost = 'localhost';
     $dbUser = 'root';
     $dbPassword = '';

     try{
          $pdo = new PDO("mysql:dbname=".$dbName.";host=".$dbHost, $dbUser, $dbPassword);
     }
     catch (Exception $e){
          echo "Unable to connect: " . $e->getMessage() ."<p>";
     }

?>