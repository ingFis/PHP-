<?php
     require_once('config.php');

     $lista = [];

     $sql = $pdo->query('SELECT * FROM usuarios');

     if($sql->rowCount() > 1){
          $lista = $sql->fetchAll(PDO::FETCH_ASSOC);
     }


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
          <td><?=$usuario['nome']?></td>
          <td><?=$usuario['email']?></td>
          <td>
               <a href="editar.php?id=<?=$usuario['id']?>">[editar]</a> |
               <a href="deletar.php?id=<?=$usuario['id']?>" onclick="return confirm('Deseja realmente excluir?')">[deletar]</a> 
          </td>
     </tr>
     <?php endforeach;?>
</table>