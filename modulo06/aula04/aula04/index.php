<?php
//Dependency Invertion Principle - Usado quando se usa classe com várias injeções de dependências
//solução: criar interface

interface DBConnection
{
     public function connection();
}

class MySQLConnection implements DBConnection
{
     public function connection(){}
}

class OracleConnection implements DBConnection
{
     public function connection(){}
}

class UsuarioDAO
{
     private $db;

     public function __construct(DBConnection $DBCon) // não precisa saber qual o tipo de db
     {
          $this->db = $DBCon->connection();
     }
}


$DBCon = new MySQLConnection();
$DBCon2 = new OracleConnection();

$usuarioDAO = new UsuarioDAO($DBCon);

?>