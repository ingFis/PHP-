<?php
     session_start();

     if(isset($_SESSION['aviso'])){
          echo $_SESSION['aviso'];
          $_SESSION['aviso'] = '';
     }

?>

<form action="autentica.php" method="POST">
     <label>
          <p>
               <font size="5">
                    Qual é o seu nome?
               </font>
          </p>
          <input type="text" name="txt_nome">
     </label>
     <br><br>
     <input type="submit" value="Enviar">
</form>