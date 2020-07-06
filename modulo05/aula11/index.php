<?php

//ENTENDENDO AUTOLOAD - processo onde o php identifica qual classe está sendo chamada -  sem ficar dando require

     require_once('autoload.php');

     //caso a classe não exista ele passa o nome da classe para o parâmetro da função anônima
     $mat = new Matematica();
     echo $mat->somar(10, 15);

     $teste = new Teste();

?>   