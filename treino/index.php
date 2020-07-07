<?php
     
    session_start();

    if(isset($_SESSION['error'])){
         echo $_SESSION['error'];
         $_SESSION['error'] = "";
    }

?>

<form action="valida.php" method="POST">
    Nome: <br>
    <input type="text" name="txt_nome">
    <input type="submit" value="Adicionar">
</form>

<?php
     $nome = file_get_contents('nomes.txt');
     $arrayNome = explode("\n", $nome);

     echo "<ul>";
     foreach($arrayNome as $name){
          echo "<li>$name</li>";
     }
     echo "</ul>";

?>