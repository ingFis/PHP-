<?php
     $dbName = 'test';
     $dbUser = 'root';
     $dbPassword = '';
     $host = 'localhost';


     $pdo = new PDO("mysql:dbname=".$dbName.";host=".$host, $dbUser, $dbPassword);



?>