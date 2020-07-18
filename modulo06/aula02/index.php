<?php

     require("config.php");

// CONCEITO DE CRUD

/*
     C - CREATE
     R - READ
     U - UPDATE
     D - DELETE
*/

//CRUD - READ - lendo dados com PDO

     $lista = [];

     //READ - consulta no db
     $sql = $pdo->query('SELECT * FROM usuarios');

     //READ - se tiver registro cria array
     if($sql->rowCount() > 0){
          $lista = $sql->fetchAll(PDO::FETCH_ASSOC);
     }

?>

<a href="adicionar.php">Adicionar usuário</a><br><br>

<table width="75%" border="1">
     <tr>
          <th>ID</th>
          <th>Nome</th>
          <th>Email</th>
          <th>Ações</th>
     </tr>
     <!-- READ - Exibe registros -->
     <?php foreach($lista as $usuario):?>
          <tr>
               <td><?=$usuario['id'];?></td>
               <td><?=$usuario['nome'];?></td>
               <td><?=$usuario['email'];?></td>
               <td>
                    <a href="editar.php?id=<?=$usuario['id']?>">[Editar]</a> | 
                    <a href="deletar.php?id=<?=$usuario['id']?>" onclick="return confirm('Deseja realmente excluir?')">[Deletar]</a>
               </td>
          </tr>
     <?php endforeach;?>
</table>