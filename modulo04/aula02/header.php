<h2>Cabeçalho</h2>
<?php

     // resgata valor do cookie
     if(isset($_COOKIE['nome'])){
          echo "<h3>".$_COOKIE['nome']."</h3>";
     }

?>   
<hr>