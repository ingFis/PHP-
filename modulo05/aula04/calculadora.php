<?php

     class Calculadora{
          private $total;

          public function add($num){
               $this->total += $num;
          }

          public function sub($num){
               $this->total -= $num;
          }

          public function multiply($num){
               $this->total *= $num;
          }

          public function divide($num){
               $this->total /= $num;
          }

          public function total(){
               return $this->total;
          }

          public function clear(){
               $this->total = 0;
          }
     }

?>