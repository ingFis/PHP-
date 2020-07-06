<?php

//ENTENDENDO INJEÇÃO DE DEPENDÊNCIA - insere uma classe dentro de outra

     Interface MatematicaBasica{
          public function somar($x, $y);
     }

     class Basico1 implements MatematicaBasica{

          public function somar($x, $y){
               return $x + $y;
          }
     }

     class Basico2 implements MatematicaBasica{

          public function somar($x, $y){
               $res = $x;
               for($q = 0; $q < $y; $q++){
                    $res++;
               }

               return $res;
          }
     }

     class Matematica{
          private $basico;

          public function __construct(MatematicaBasica $basic){
               $this->basico = $basic;
          }

          public function somar($x, $y){
               return $this->basico->somar($x, $y);
          }
     }

     //insere o que eu quero de fora para dentro da classe
     $basic = new Basico2();

     $mat = new Matematica($basic);

     echo $mat->somar(10, 15);


?>