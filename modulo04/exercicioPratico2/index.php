<?php
     session_start();

     if(isset($_SESSION['aviso'])){
          echo $_SESSION['aviso'];
          $_SESSION['aviso'] = '';
     }

?>

<form action="validaNome.php" method="POST">
     <label>
          Novo nome:
          <br> 
          <input type="text" name="txt_nome">
     </label>
     <input type="submit" value="Adicionar">
</form>

<h2>Lista de nomes</h2>
<?php
     $listaNomes = file_get_contents('listaNomes.txt');
     $listaNomesArray = explode("\n", $listaNomes);

     echo "<ul>";
     foreach($listaNomesArray as $nome){
          echo "<li>".$nome."</li>";
     }
     echo "</ul>";
?>