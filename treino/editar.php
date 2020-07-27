<?php
     require_once('config.php');

     $id = filter_input(INPUT_GET, 'id');
     $usuario = [];

     if($id){
          $sql = $pdo->prepare('SELECT * FROM usuarios WHERE id=:id');
          $sql->bindValue(':id', $id);
          $sql->execute();

          if($sql->rowCount() > 0){
               $usuario = $sql->fetch(PDO::FETCH_ASSOC);
          }
     }

     

?>

<form action="atualizaCampos.php?id=<?=$usuario['id']?>" method="POST">
     <label>
          Nome: <br>
          <input type="text" name="nome" value="<?=$usuario['nome']?>">
     </label><br><br>
     <label>
          Email: <br>
          <input type="text" name="email" value="<?=$usuario['email']?>">
     </label><br><br>
     <input type="submit" value="Salvar alterações">
</form>