<?php

     //apaga cookie
     setcookie('nome', '', time() - 3600);

     header('location: index.php');
     exit;

?>