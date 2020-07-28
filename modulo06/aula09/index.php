<?php

     $date = new DateTime();
     //mudar o timezone
     $date->setTimezone(new DateTimeZone('America/Sao_Paulo'));

     //adicionar tempo
     $date->add(DateInterval::createFromDateString('5 days, 5 minutes'));

     //subtrair tempo
     $date->sub(DateInterval::createFromDateString('5 days, 5 minutes'));

     echo $date->format('d/m/y H:i:s');

     echo "<br><hr><br>";

     // comparar datas

     $date1 = new DateTime('2020-01-17');
     $date2 = new DateTime('2020-02-17');

     if($date1 < $date2){
          echo "DATE 2 é maior";
     }else{
          echo "DATE 1 é maior";
     }

     echo "<br><hr><br>";

     // diferença de datas
     $today = new DateTime();
     $anoNovo = new DateTime('2021-01-01');

     $diff = $today->diff($anoNovo);

     echo $diff->format('%m meses, %d dias, %i minutos e %s segundos');


?>