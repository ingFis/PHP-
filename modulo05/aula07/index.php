<?php

//ENTENDENDO POLIMORFISMO - classes diferentes tem a mesma forma(métodos)

     //interface aplicação do polimorfismo
     Interface Forma{
          public function getArea();
          public function getTipo();
     }

     class Quadrado implements Forma{
          private $largura;
          private $altura;

          public function __construct($largura, $altura){
               $this->largura = $largura;
               $this->altura = $altura;
          }

          public function getArea(){
               return $this->largura * $this->altura;
          }

          public function getTipo(){
               return "Quadrado";
          }
     }

     class Circulo implements Forma{
          private $raio;

          public function __construct($raio){
               $this->raio = $raio;
          }

          public function getArea(){
               return pi() * (pow($this->raio, 2));
          }

          public function getTipo(){
               return "Circulo";
          }
     }

     $quadrado = new Quadrado(4, 4);
     $circulo = new Circulo(4);

     $objetos = [
          $quadrado,
          $circulo
     ];

     foreach($objetos as $objeto){
          $area = $objeto->getArea();
          $tipo = $objeto->getTipo();

          echo "Tipo: ".$tipo." Área: ".$area."<br>";
     }


?>