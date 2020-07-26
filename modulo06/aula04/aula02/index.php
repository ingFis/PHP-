<?php

//Liskov Substitution Principle

class A
{
     public function getNome()
     {
          return "Meu nome é A";
     }
}

class B extends A
{
     public function getNome()
     {
          return "Meu nome é B"; //respeitar o retorno
          //return 25; - viola, pois muda o objetivo do método
     }
}

// se recebe A tem que receber B que extende A
function imprimiNome(A $objeto){
     return $objeto->getNome();
}

$objeto1 = new A();
$objeto2 = new B();
echo imprimiNome($objeto1)."<br>";
echo imprimiNome($objeto2);

?>