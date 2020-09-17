<?php 

$render('header');

echo "Nome: $nome <br>";
echo "Idade: $idade <br>";
?>

<?php foreach($posts as $post):?>
     <h3><?=$post['titulo']?></h3>
     <p><?=$post['corpo']?></p>
<?php endforeach;?>