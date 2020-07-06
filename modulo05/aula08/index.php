<?php

//ENTENDENDO NAMESCAPE
//para usar classes com o mesmo nome, usado para fazer divisão de diretórios

     require_once("classe1.php");
     require_once("classe2.php");
     require_once("classe/matematica/basico.php");

     // diz pro php quem vai se chamar básico
     use classe\matematica\Basico as Basico;

     $testa = new classe2\MinhaClasse();
     echo $testa->testar();   

     $basico = new Basico();

?>