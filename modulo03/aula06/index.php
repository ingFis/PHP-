<?php

//TRABALHANDO COM MÚLTIPLOS ARQUIVOS e COM PASTAS DIFERENTES

     require('config.php');

     echo "Bem-vindo(a) ".$usuario.", <br><br>";

     echo"<a href='paginas/home.php'>Home</a><br>";

     echo "<p>Conteúdo do site...</p>";

     /* obs se houver erro no require - ele para a execução do programa, já
        o include permite a continuação da execução do programa
        
        require_once - executa uma única vez - protege o sistema de repetir código

     */

     /*
          PASTAS DIFERENTES - Para importar: 
          Importante: não é onde o arquivo está e sim onde ele está sendo chamado
     */



?>