<?php

     session_start();

     $nome = filter_input(INPUT_POST, 'txt_nome', FILTER_SANITIZE_SPECIAL_CHARS);
     $email = filter_input(INPUT_POST, 'txt_email', FILTER_VALIDATE_EMAIL);
     $idade = filter_input(INPUT_POST, 'txt_idade', FILTER_VALIDATE_INT);

     if($nome && $idade){
          echo "NOME: $nome<br>";
          echo "EMAIL: $email<br>";
     }else{
          $_SESSION['error'] = "Preencha todos os campos corretamente!";
          header('location: index.php');
          exit;
     }

     

?>