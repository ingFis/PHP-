<?php

     $dbName = 'test';
     $dbhost = 'localhost';
     $dbUser = 'root';
     $dbPassword = '';

     $pdo = new PDO('mysql:dbname='.$dbName.';host='.$dbhost, $dbUser, $dbPassword);

?>