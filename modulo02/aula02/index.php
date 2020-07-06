<?php

     //LOOP WHILE
     $numero = 0;

     while($numero < 11){
          echo "Nº ".$numero."<br>";
          $numero++;
     }

     echo"<br><hr><br>";

     //LOOP FOR
     for($i = 0; $i < 11; $i++){
          echo "Nº ".$i."<br>";
     }

     echo"<br><hr><br>";

     //LOOP FOREACH
     echo"<h2>Ingredientes</h2>";

     $ingredientes = 
     [
          'açucar',
          'farinha de trigo',
          'ovo',
          'leite',
          'fermento em pó',
          'manteiga'
     ];

     echo"<ul type='square'>";
     foreach($ingredientes as $chave => $ingrediente){
          echo "<li> Item ".($chave + 1).": ".$ingrediente."</li>";
     }
     echo"</ul>";

     echo"<br><hr><br>";

     //EXECÍCIO 01

     $traco = '-';

     for($i = 0; $i < 10; $i++){
          for($j = 0; $j < 10; $j++){
               echo $traco;
          }
          echo"<br>";
     }

     
     echo"<br><hr><br>";

     //EXERCÍCIO 02

     $tracinho = '';

     for($i = 0; $i < 20; $i++){
          echo $tracinho .= '-';
          echo'<br>';
     }

?>