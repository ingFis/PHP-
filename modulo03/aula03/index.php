<?php

//FUNÇÕES NATIVAS DE STRING 1/2

     //Tirar espaçamentos do começo e do fim - trim()
     $nomeSujo = '   Ingrid Pereira  ';
     $nomeLimpo = trim($nomeSujo);

     //Contar caracteres - strlen()
     echo "Nome sujo: ".strlen($nomeSujo)."<br><br>";
     echo "Nome limpo: ".strlen($nomeLimpo)."<br><br>";

     //Caixa baixa - strtolower()
     echo "Caixa baixa: ".strtolower($nomeLimpo)."<br><br>";

     //Caixa alta - strtoupper()
     echo "Caixa alta: ".strtoupper($nomeLimpo)."<br><br>";

     //Substituir palavra - str_replace()
     echo "Substituir palavra: ".str_replace('Pereira', 'Silva', $nomeLimpo)."<br><br>";
     echo "Substituir letras: ".str_replace('e', '3', $nomeLimpo)."<br><br>";

     //Pegar pedaços de uma string - substr()
     echo "Pedaços: ".substr($nomeLimpo, 3, 3)."<br><br>";

     //Começando pelo último
     echo "Pedaços: ".substr($nomeLimpo, -14, 3)."<br><br>";

//FUNÇÕES NATIVAS DE STRING 2/2

     //Posição do caractere ou pedaço da string - strpos()
     echo "Posição do caractere 'a': ".strpos($nomeLimpo, 'a')."<br><br>";

     //Transforma a primeira letra em maiúscula - ucfirst()
     echo "Primeira letra maiúscula: ".ucfirst('ingrid silva')."<br><br>";

     //Transforma a primeira letra de cada palavra em maiúscula - ucwords()
     echo "Primeira letra de cada palavra maiúscula: ".ucwords('ingrid silva')."<br><br>";

     //Transforma em array - explode()
     $arrayNome = explode(' ', $nomeLimpo);
     print_r($arrayNome);

     echo "<br><br>";

     //Formata números
     $numero = 1254.59;
     echo "Formata número: R$".number_format($numero, 2,',', '.');

?>