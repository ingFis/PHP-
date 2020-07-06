<?php
     session_start();

     $nome = filter_input(INPUT_POST, 'txt_nome', FILTER_SANITIZE_SPECIAL_CHARS);
     $email = filter_input(INPUT_POST, 'txt_email', FILTER_VALIDATE_EMAIL);
     $idade = filter_input(INPUT_POST, 'txt_idade', FILTER_VALIDATE_INT);

     if($nome && $email && $idade){

          $expira = time() + (86400 * 30);

          //cria cookie
          setcookie('nome', $nome, $expira);

          echo "NOME: $nome<br>";
          echo "EMAIL: $email<br>";
          echo "IDADE: $idade<br>";
     }else{

          $_SESSION['aviso'] = "Preencha os campos corretamente!";
          header('location: index.php');
          exit;
     }

     //sessões - ficam armazenadas no servidor | cookie - ficam armazenados no pc do usuário
     // Sessão existe enquanto o navegador estiver aberto, cookie tem validade específica


?>