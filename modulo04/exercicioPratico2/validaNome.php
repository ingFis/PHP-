<?php
     session_start();

     $nome = filter_input(INPUT_POST, 'txt_nome', FILTER_SANITIZE_SPECIAL_CHARS);

     if($nome){     
          $listaNomes = file_get_contents("listaNomes.txt");
          $listaNomes .= "\n $nome";
          file_put_contents("listaNomes.txt", $listaNomes);
          header('location: index.php');
          exit;
     }else{
          $_SESSION['aviso'] = "Preencha o campo corretamente!";
          header('location: index.php');
          exit;
     }

?>