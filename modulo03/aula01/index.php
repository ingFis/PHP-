<?php
     //INTRODUÇÃO À FUNÇÕES - EXECUTA UM BLOCO DE CÓDIGO ONDE FOR CHAMADA(quantas vezes quiser)
     //tem entrada de dados -> execução -> resultado. 

     
     // DEFININDO UMA FUNÇÃO

     function subsequente(){
          for($i = 0; $i < 11; $i++){
               echo $i;
               echo "<br>";
          }

          echo "<hr>";
     }

     subsequente();
     subsequente();

     echo "<br><br>";

     // PARÂMETRO: DEFINIÇÃO NORMAL

     function somar($n1, $n2){
          $soma = $n1 + $n2;
          return $soma;
     }

     $x = somar(1, 3);
     $y = somar(4, 4);
     $z = somar($x, $y);

     echo "Soma: ".$z;

     // PARÂMETRO: TYPE E VALOR PADRÃO

     function multiplicar(int $n1, int $n2 = 1){
          $produto = $n1 * $n2;
          return $produto;
     }

     echo "<hr><br> Produto: ".multiplicar(8);


     // PARÂMETRO: VALOR OU REFERÊNCIA

     $total = NULL;
     $x = 25;
     $y = 15;

     function subtrair($x, $y, &$total){
          $total = $x - $y;
          return $total;
     }

     // $x e $y estão sendo passados por valor
     // $total está sendo passado por referência - Ou seja a variálvel está sendo
     // passada e poderá ter seu valor alterado
     subtrair($x, $y, $total);

     echo "<br><hr> Total: $total<br><hr>";


     $lista = [4, 9, 2];

     // recebe o valor por referência
     sort($lista);

     print_r($lista);





?>