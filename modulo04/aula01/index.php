<?php
     session_start();

//INTRODUÇÃO À HTTP REQUESTS

     require_once('header.php');

     //POST - Envia dos dados internamente
     //GET  - Envia os dados pela url(padrão)

     //quando o action não é especificado ele redireciona os dados para a própria página

     if($_SESSION['aviso']){
          echo $_SESSION['aviso'];
          echo $_SESSION['aviso'] = '';
     }
?>

<form action="destinatario.php" method="POST">
     <label>
          Nome: 
          <br>
          <input type="text" name="txt_nome">
     </label>
     <br><br>
     <label>
          Email: 
          <br>
          <input type="text" name="txt_email">
     </label>
     <br><br>
     <label>
          Idade: 
          <br>
          <input type="text" name="txt_idade">
     </label>
     <br><br>
     <input type="submit" value="Enviar">
</form>