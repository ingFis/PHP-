<form action="valida.php" method="POST">
     Nome: <br>
     <input type="text" name="txt_nome"><br><br>

     Email: <br>
     <input type="text" name="txt_email"><br><br>

     Idade: <br>
     <input type="text" name="txt_idade"><br><br>

     <input type="submit" value="Enviar">
</form>

<?php
     session_start();

     if(isset($_SESSION['error'])){
          echo $_SESSION['error'];
          $_SESSION['error'] = "";
     }

     echo PHP_VERSION;
?>
