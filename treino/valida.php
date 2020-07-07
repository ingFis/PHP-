<?php
     session_start();

     $nome = filter_input(INPUT_POST, 'txt_nome', FILTER_SANITIZE_SPECIAL_CHARS);

     if($nome){
          $arq = file_get_contents('nomes.txt');
          $arq .= "\n $nome";
          file_put_contents("nomes.txt", $arq);
          header('location: index.php');
          exit;
     }else{
          $_SESSION['error'] = "Preencha o campo corretamente!";
          header('location: index.php');
          exit;
     }

?>