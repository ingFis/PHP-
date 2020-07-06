<?php

//ESCREVENDO EM ARQUIVOS

     $texto = "Ingrid Silva";

     // se o qrquivo não existir ele cria, se existir ele substitui
     file_put_contents('nome.txt', $texto);

     echo "Arquivo criado com sucesso<br>";

     $texto = file_get_contents('nome.txt');
     $texto .= "\n Idade: 21";
     file_put_contents('nome.txt', $texto);

     echo "Arquivo atualizado com sucesso";


     //obs: dar permissão para o htdocs

?>