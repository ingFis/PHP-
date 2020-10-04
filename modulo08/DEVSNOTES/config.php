<?php

$host = 'localhost';
$db_name = 'devsnotes';
$db_user = 'root';
$db_pass = 'bcd127';

$pdo = new PDO("mysql:dbname=$db_name;host=$host", $db_user, $db_pass);

// Todas as requisições terão que obedecer essa estrutura
$array = [
     'error'=>'',
     'result'=>[]
];

?>