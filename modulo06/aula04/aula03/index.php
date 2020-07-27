<?php

//Interface Segregation Principle - Apenas métodos essenciais e que vão ser utilizadas pelas classes que implementarem

interface Aves
{
     public function localization($alt, $lon);
     // public function altitude($alt); viola o princípio da segregação de interface, pois nem toda ave voa
     public function render();
}

interface AvesQueVoam extends Aves
{
     public function altitude($alt);
}

class Papagaio implements AvesQueVoam
{
     public function localization($alt, $lon){}
     public function altitude($alt){}
     public function render(){}
}

class Pinguim implements Aves
{
     public function localization($alt, $lon){}
     public function render(){}
}

?>