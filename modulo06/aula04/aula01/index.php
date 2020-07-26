<?php

//Open/Closed Principle - Usar interface

interface Remuneravel
{
     public function remuneracao();
}

class ContratoClt implements Remuneravel
{
     public function remuneracao()
     {

     }
}

class Estagio implements Remuneravel
{
     public function remuneracao()
     {

     }
}

class ContratoPj implements Remuneravel
{
     public function remuneracao()
     {

     }
}


// aberta pra extensão e fechada para modificação
class FolhaDePagamento
{
     public function calcular(Remuneravel $funcionario)
     {
          return $funcionario->remuneracao();
          
          /* NÃO RECOMENDADO - ESTÁ MODIFICANDO A CLASSE A CADA EXTENSÃO
          if($funcionario instanceof ContratoClt){
               $salario = $funcionario->calcularSalario();
          }elseif($funcionario instanceof Estagio){
               $salario = $funcionario->bolsaAuxilio();
          }elseif($funcionario instanceof ContratoPj){
               $salario = $funcionario->calcularPagamento();
          }*/

     }
}




?>