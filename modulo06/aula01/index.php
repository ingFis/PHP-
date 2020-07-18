<?php

//CONECTANDO AO BANCO DE DADOS COM PDO

     $pdo = new PDO("mysql:dbname=test;host=localhost", "root", "");

     //$sql - item de comando(pegar os dados a partir dele) query - consulta
     $sql = $pdo->query("SELECT * FROM usuarios");

     //fetchAll - pegar todos os registros FETCH_ASSOC - Vai associar os registros
     $dados = $sql->fetchAll(PDO::FETCH_ASSOC);

     //pegar o número de registros
     echo "TOTAL DE REGISTROS: ".$sql->rowCount()."<br>";

     echo"<pre>";
     print_r($dados);    


?>