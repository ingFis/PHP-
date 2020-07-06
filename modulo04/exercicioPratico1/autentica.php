<?php

     session_start();

     $nome = filter_input(INPUT_POST, 'txt_nome', FILTER_SANITIZE_SPECIAL_CHARS);

     if($nome){
          $_SESSION['name'] = $nome;
          header('location: index.php');
          exit;
     }else{
          $_SESSION['aviso'] = "Preencha os dados corretamente!";
          header('location: login.php');
          exit;
     }

?>