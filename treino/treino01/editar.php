<?php

     require_once('config.php');
     require_once('dao/UsuarioDaoMysql.php');

     $usuarioDaoMysql = new UsuarioDaoMysql($pdo);

     $usuario = false;

     $id = filter_input(INPUT_GET, 'id');

     $usuario = $usuarioDaoMysql->findById($id);

     if($usuario === false){
          header('location: index.php');
          exit;
     }

?>

<form action="atualizaCampos.php?id=<?=$usuario->getId()?>" method="POST">
     <label>
          Nome: <br>
          <input type="text" name="nome" value="<?=$usuario->getNome()?>">
     </label><br><br>
     <label>
          Email: <br>
          <input type="email" name="email" value="<?=$usuario->getEmail()?>">
     </label><br><br>
     <input type="submit" value="Salvar alterações">
</form>