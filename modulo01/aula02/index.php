<?php
     //ARRAYS

     $ingredientes = 
     [
          'ovo', 
          'manteiga', 
          'farinha de trigo', 
          'fermento em pó', 
          'leite', 
          'açucar'
     ];

     //Resgata valores de um array
     echo "Item 1: $ingredientes[0] <br>";
     echo "Item 2: $ingredientes[1] <br>";
     echo "Item 3: $ingredientes[2] <br>";
     echo "Item 4: $ingredientes[3] <br>";
     echo "Item 5: $ingredientes[4] <br>";
     echo "Item 6: $ingredientes[5] <br>";

     //OPERADOR ARRAY SPREAD(7.4)
     $ingredientes2 = 
     [
          ...$ingredientes,
          'corante'
     ];

     echo "<br><br>";
     print_r($ingredientes2);

     //Exercício
     echo "<br><br>";

     $lista = 
     [
          'nome' => 'Ingrid',
          'idade' => 21,
          'atributos' => [
               'forca' => 60,
               'agilidade' => 80,
               'destreza' => 60
          ],
          'vida' => 1000,
          'mana' => 928
     ];

     print_r($lista);

?>