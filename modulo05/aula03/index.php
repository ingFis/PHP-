<?php

//MÉTODO ESTÁTICO - Pode ser usado sem precisar instaciar um objeto

     class Matematica{

          public static function somar($n1, $n2){
               return $n1 + $n2;
          }
     }


     //Só precisa referenciar a classe
     echo Matematica::somar(12, 25);

     //obs - pode-se criar propriedade estática também
?>