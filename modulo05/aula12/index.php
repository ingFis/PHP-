<?php

//ENTENDENDO A PSR-4 - Todas as classes tem que ter namespace

     require('Autoload.php');

     $mat = new matematica\Basica();

     echo $mat->somar(5, 25);

?>