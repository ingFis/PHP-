<?php
     require_once('config.php');
     require_once('dao/UsuarioDaomysql.php');

     $usuarioDaoMysql = new UsuarioDaoMysql($pdo);
     $lista = $usuarioDaoMysql->findAll();


?>

<a href="adicionarUsuario.php">Adicionar usuário</a><br><br>

<table width="75%" border="1">
     <tr>
          <th>nome</th>
          <th>Email</th>
          <th>Ações</th>
     </tr>
     <?php foreach($lista as $usuario):?>
     <tr>
          <td><?=$usuario->getNome()?></td>
          <td><?=$usuario->getEmail()?></td>
          <td>
               <a href="editar.php?id=<?=$usuario->getId()?>">[editar]</a> |
               <a href="deletar.php?id=<?=$usuario->getId()?>" onclick="return confirm('Deseja realmente excluir?')">[deletar]</a> 
          </td>
     </tr>
     <?php endforeach;?>
</table>