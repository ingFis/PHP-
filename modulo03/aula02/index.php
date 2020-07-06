<?php

// FUNÇÃO ANÔNIMA - usada dentro de uma variável ou como parâmetro de outra função

     $dizimo = function(float $salario){
          return $salario * 0.1;
     };

     $calcularDizimo = $dizimo;

     echo $calcularDizimo(1000.000);
     echo "<br><hr><br>";

// FUNÇÃO FLECHA(ARROW FUNCTION)(7.4) - Apenas uma expressão - flecha é o indicador de retorno

     $dizimo2 = fn(float $salario) => $salario * 0.1;

     echo $dizimo2(1200.000);
     echo "<br><hr><br>";

// FUNÇÃO RECURSIVA - chama ela mesma
     
     function dividir($num){
          $metade = $num / 2;
          echo $metade."<br>";

          if(round($metade) > 0){
               dividir($metade);
          }
     }

     dividir(1000);
     echo "<br><hr><br>";

//FUNÇÕES NATIVAS DE MATEMÁTICA

     //valor absoluto: abs - retorna o módulo do número
     echo "Valor absoluto: ".abs(-258.44)."<br><br>";

     //pi
     echo "PI: ".pi()."<br><br>";

     //Arredondar para baixo - floor
     echo "Arredondar para baixo: ".floor(5.7)."<br><br>";

     //Arredondar para cima - ceil
     echo "Arredondar para cima: ".ceil(5.7)."<br><br>";

     //Arredondamento relativo - round - 5.5 -> para cima - segundo parâmetro: casas decimais
     echo "Arredondamento relativo: ".round(5.787, 2)."<br><br>";

     //Gerar número aleatórios - rand
     echo "Número aleatório: ".rand(0, 100)."<br><br>";

     $lista = [4, 8, 2, 25, 6, 43, 7];

     //Maior valor - max
     echo "Maior valor: ".max($lista)."<br><br>";

     //Menor valor - min
     echo "Menor valor: ".min($lista)."<br><br>";

     //Potencia - pow
     echo "Potência: ".pow(8, 2)."<br><br>";

     //Raiz quadrada - sqrt
     echo "Raiz quadrada: ".sqrt(64)."<br><br>";


?>