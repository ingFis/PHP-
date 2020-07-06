<?php

//PEGANDO INFORMAÇÕES DO FORMULÁRIO E VALIDANDO INFORMAÇÕES DO FORMULÁRIO 

     //inicia sessão
     session_start();

     // FILTER_SANITIZE_SPECIAL_CHARS - transforma tudo em string - não executa códigos - evita ataques
     $nome = filter_input(INPUT_POST, 'txt_nome', FILTER_SANITIZE_SPECIAL_CHARS);

     //FILTER_VALIDATE_EMAIL - valida formato email
     $email = filter_input(INPUT_POST, 'txt_email', FILTER_VALIDATE_EMAIL);

     // FILTER_SANITIZE_NUMBER_INT - Elimina tudo que não é número inteiro
     // FILTER_VALIDATE_INT - valida formato int
     $idade = filter_input(INPUT_POST, 'txt_idade', FILTER_VALIDATE_INT);

     //filter_var - Trata variáveis que ja existem

     if($nome && $email && $idade){
          echo "NOME: ".$nome."<br><br>";
          echo "EMAIL: ".$email."<br><br>";
          echo "IDADE: ".$idade."<br><br>";
     }else{

          $_SESSION['aviso'] = "Preencha todos os campos!";

          // Troca o cabeçalho da requisição - antes de aparecer alguma coisa na tela
          header("location: index.php");

          // cancela a execução do restante do código
          exit;
     }  
     
     /*
          FILTER_VALIDATE_FLOAT
          FILTER_VALIDATE_URL
          FILTER_VALIDATE_IP

          SANITIZE - processo de limpeza

          FILTER_SANITIZE_URL
          FILTER_SANITIZE_NUMBER_FLOAT
          FILTER_SANITIZE_STRING
          FILTER_SANITIZE_EMAIL    
     
     */

//SESSÕES
     //sessões - ficam armazenadas no servidor | cookie - ficam armazenados no pc do usuário
     // Sessão existe enquanto o navegador estiver aberto, cookie tem validade específica
?>