<?php
     echo "Hello, World! <br><br>";

     /* 
          TIPOS DE VARIÁVEIS - ARMAZENA INFORMAÇÕES QUE SERÃO USADAS NA PRÓPRIA REQUISIÇÃO
          Regras: Sem espaços ou caracteres especiais, número a partir do segundo caractere,
          camelCase
     */

     $idade = 21; // inteiro
     $altura = 1.52; // flutuante
     $nome = 'Ingrid'; // String
     $sobrenome = 'Silva';
     $estudando = TRUE; // booleano
     $vazia = null; // sem valor atribuído

     /* 
          MESCLANDO VARIÁVEIS 
          obs: aspas simples não reconhece variáveis - Interpreta valor literal
     */
     $nomeCompleto = $nome." ".$sobrenome;
     
     $nomeCompleto2 = $nome;
     $nomeCompleto2 .= " ".$sobrenome;

     $nomeCompleto3 = "$nome $sobrenome";

     echo $nomeCompleto."<br><br>";
     echo $nomeCompleto2."<br><br>";
     echo $nomeCompleto3;


?>
