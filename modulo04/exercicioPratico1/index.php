<?php

     session_start();

     if(isset($_SESSION['name'])){
          echo "<p> 
                    <font size='5'>
                         Olá, ".$_SESSION['name']." - <a href='apagarSessao.php'>Sair<a/>
                    </font>
               </p>";
     }else{
          header('location: login.php');
          exit;
     }

?>