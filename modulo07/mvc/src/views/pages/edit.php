<?php $render('header'); ?>

<h2>Atualizar usuário</h2>

<form action="<?=$base?>/usuario/<?=$usuario['id']?>/editar" method="POST">
     <label for="">
          Nome: <br>
          <input type="text" name="nome" value="<?=$usuario['nome']?>">
     </label><br><br>
     <label for="">
          Email: <br>
          <input type="text" name="email" value="<?=$usuario['email']?>">
     </label><br><br>

     <input type="submit" value="Atualizar">
</form>

<?php $render('footer'); ?>

