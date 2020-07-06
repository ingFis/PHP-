<?php
     require_once('header.php');

     session_start();
     
     if(isset($_SESSION['aviso'])){
          echo $_SESSION['aviso'];
          $_SESSION['aviso'] = '';
     }

?>

<a href="apagarCookie.php">Apagar cookie</a><br><br>

<form action="destino.php" method="POST">
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