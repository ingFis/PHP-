<?php $render('header'); ?>

<a href='<?=$base;?>/novo'>Novo usuário</a><br><br>

<table border="1" align="center" width="90%">
     <tr>
          <th>ID</th>
          <th>Nome</th>
          <th>Email</th>
          <th>Ações</th>
     </tr>
     <?php foreach($usuarios as $user):?>
     <tr align="center">
          <td><?=$user['id']?></td>
          <td><?=$user['nome']?></td>
          <td><?=$user['email']?></td>
          <td>
               <a href="<?=$base?>/usuario/<?=$user['id']?>/editar">
                    <img src="<?=$base?>/assets/imagens/document.png" alt="" width="30" title="editar">
               </a>
               <a href="<?=$base?>/usuario/<?=$user['id']?>/excluir" onclick="return confirm('Deseja realmente excluir?')">
                    <img src="<?=$base?>/assets/imagens/trash.png" alt="" width="30" title="excluir">
               </a>
          </td>
     </tr>
     <?php endforeach;?>
</table>

<?php $render('footer'); ?>
