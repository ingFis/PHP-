<?php

//MANIPULAÇÃO DE IMAGEM COM GD(biblioteca - ativa no servidor) - fica na memória do servidor

//criando imagem 

//cria um quadrado 
$imagem = imagecreatetruecolor(300, 300);

//cria cor 1º imagem, 2º RGB
$cor = imagecolorallocate($imagem, 32, 102, 214);

//preencher imagem 1º imagem, 2º onde começa a preencher left to right, 
//3º onde começa a preencher top to bottom, 4º cor
imagefill($imagem, 0, 0, $cor);

//tranforma arquivo em imagem - mudar o cabeçalho
header("Content-Type: image/jpeg");

//gera imagem 1º imagem, 2º onde será salvo(null - mostra na tela), 3º qualidade
imagejpeg($imagem, 'image.jpg', 100);

?>