<?php
     require_once('config.php');

     $lista = [];

     $sql = $pdo->query('SELECT * FROM usuarios');

     if($sql->rowCount() > 0){
          $lista = $sql->fetchAll(PDO::FETCH_ASSOC);
     }


     


     // print_r($lista);

?>

<a href="adicionarUsuario.php">Adicionar Usuário</a><br><br>

<table border=1 width="70%">
     <tr>
          <th>Nome</th>
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