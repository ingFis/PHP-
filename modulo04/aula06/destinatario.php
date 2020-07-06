<?php
     echo "<pre>";
     print_r($_FILES);

     /* 
          name - nome original do arq enviado

          type - (mime type) - Tipo original do arq - sempre ver o tipo pelo type
               e não pela extensão

          tmp_name - Caminho p/ o arq enviado - quando manda um arq para o servidor 
                    ele recebe e armazena temporariamente em um local 

          error - erros ocorridos no upload

          size - tamanho do arquivo em bytes
       
          obs: se o arq não for usado, quando a requisição terminar ele será excluído
     */

     $arqPermitidos = [
          'image/jpeg',
          'image/jpg',
          'image/png'
     ];

     // valida o tipo de arquivo
     if(in_array($_FILES['arquivo']['type'], $arqPermitidos)){
          //move o arquivo do local temporário para dentro do sistema

          $caminho = $_FILES['arquivo']['tmp_name'];

          //Para garantir q dois arquivos não tenham o mesmo nome
          $nome = md5(time().rand(0, 1000)).'.jpg';

          move_uploaded_file($caminho, 'arquivos/'.$nome);

          echo "Arquivo enviado com sucesso";
     }else{
          echo "Arquivo não permitido";
     }

     


?>