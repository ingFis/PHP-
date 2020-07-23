<?php
     //CRIANDO UM DAO NA PRÁTICA (1/5)
     require('config.php');
     require('dao/UsuarioDaoMysql.php');

     $usuarioDaoMysql = new UsuarioDaoMysql($pdo);

     //retorna array - e cada item é um objeto do tipo Usuario
     $lista = $usuarioDaoMysql->findAll();

     
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
               <td><?=$usuario->getId();?></td>
               <td><?=$usuario->getNome();?></td>
               <td><?=$usuario->getEmail();?></td>
               <td>
                    <a href="editar.php?id=<?=$usuario->getId()?>">[Editar]</a> | 
                    <a href="deletar.php?id=<?=$usuario->getId()?>" onclick="return confirm('Deseja realmente excluir?')">[Deletar]</a>
               </td>
          </tr>
     <?php endforeach;?>
</table>