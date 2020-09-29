<?php $render('header'); ?>

<h2>Adicionar novo usuário</h2>

<form action="<?=$base?>/novo" method="POST">
     <label for="">
          Nome: <br>
          <input type="text" name="nome">
     </label><br><br>
     <label for="">
          Email: <br>
          <input type="text" name="email">
     </label><br><br>

     <input type="submit" value="Adicionar">
</form>

<?php $render('footer'); ?>
