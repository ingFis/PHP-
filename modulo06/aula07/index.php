<?php

//GD: RESIZE


//1º nome do arquivo
$arquivo = 'fotografar-animais-grandes.jpg';

//2º Setar largura e altura máximas
$maxWidth = 500;
$maxHeight = 500;

//3º cálculos

//tamanho da imagem 
$info = getimagesize($arquivo);

// print_r($info);

//list() - guarda valores do array nas variaveis
list($originalWidth, $originalHeight) = $info;

//pegar proporção da imagem
$ratio = $originalWidth / $originalHeight; //1,5
$ratioDest = $maxWidth / $maxHeight; 

$finalWidth = 0;
$finalHeight = 0;

if($ratioDest > $ratio){
     $finalWidth = $maxHeight * $ratio; //750
     $finalHeight = $maxHeight; //500

     //750/500 = 1,5

}else{
     $finalHeight = $maxWidth / $ratio; //333
     $finalWidth = $maxWidth; //500

     //500/333 = 1,5
}

//4º cria a imagem
$imagem = imagecreatetruecolor($finalWidth, $finalHeight);

//5º ler a imagem original
$original = imagecreatefromjpeg($arquivo);

//6º pegar imagem original e jogar na imagem criada mas na proporção desejada
imagecopyresampled(
     $imagem,
     $original,
     0, 0, 0, 0,
     $finalWidth, $finalHeight,
     $originalWidth, $originalHeight
);

header('Content-Type: image/jpeg');

imagejpeg($imagem, null, 100);

?>