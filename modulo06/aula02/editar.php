<?php

//UPADATE - Etapa 01: ATUALIZANDO DADOS COM PDO

     require('config.php');

     $info = [];

     //UPDATE - resgata o id vindo do get
     $id = filter_input(INPUT_GET, 'id');

     if($id){
          //UPDATE - procura id no DB
          $sql = $pdo->prepare('SELECT * FROM usuarios WHERE id=:id');
          $sql->bindValue(':id', $id);
          $sql->execute();

          //UPDATE - se encontrar pega os dados
          if($sql->rowCount() > 0){
               //fetch - pega o primeiro registro 
               $info = $sql->fetch(PDO::FETCH_ASSOC);
          }else{
               header('location: index.php');
               exit;
          }
     }else{
          header('location: index.php');
          exit;
     }

?>

<h2>Editar Usuários</h2>

<form action="atualizarCampos.php?id=<?=$info['id']?>" method="POST">
     <label>
          Nome: <br>
          <!-- UPDATE - exibe os dados no form -->
          <input type="text" name="nome" value="<?=$info['nome']?>">
     </label><br><br>
     <label>
          Email: <br>
          <input type="email" name="email" value="<?=$info['email']?>">
     </label><br><br>

     <input type="submit" value="Salvar alterações">
</form>