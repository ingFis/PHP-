<?php

//FUNÇÕES NATIVAS DE DATA/HORA

     //milissegundos - 01/01/1970 - início da contagem - time()
     echo "Milissegundos: ".time()."<br><br>";

     //data - dia, mês, ano, hora, dia da semana, dia do ano, etc... - date()
     echo "Data atual: ".date('d/m/Y H:i:s')."<br><br>";
     echo "Dia do ano: ".date('z')."<br><br>";
     echo "Dia da semana: ".date('l')."<br><br>";

     //obs padrão internacional: Y-m-d
     $dataPadrao = "2020-06-18";

     // transforma data em time
     $data = strtotime($dataPadrao);

     echo date("d/M/Y", $data)."<br><br>";


     //Exercício prático
     function formataData(String $dataPadrao){
          $data = date('d/m/Y', strtotime($dataPadrao));

          $semana = date('N', strtotime($dataPadrao));

          $diaSemana = "";

          switch($semana){
               case 1:
                    $diaSemana = "Segunda-feira";
                    break;
               case 2:
                    $diaSemana = "Terça-feira";
                    break;
               case 3:
                    $diaSemana = "Quarta-feira";
                    break;
               case 4:
                    $diaSemana = "Quinta-feira";
                    break;
               case 5: 
                    $diaSemana = "Sexta-feira";
                    break;
               case 6:
                    $diaSemana = "Sábado";
                    break;
               case 7:
                    $diaSemana = "Domingo";
                    break;
          }

          echo $data." - ".$diaSemana;

     }

     formataData('2020-06-17');



     


?>