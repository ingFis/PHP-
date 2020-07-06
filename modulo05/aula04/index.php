<?php

//EXERCÍCIO PRÁTICO

     require_once('calculadora.php');

     $cal = new Calculadora;
     $cal->add(12);
     $cal->add(2);
     $cal->sub(1);
     $cal->multiply(3);
     $cal->divide(2);
     $cal->add(0.5);

     echo "Total: ".$cal->total();

     $cal->clear();

?>