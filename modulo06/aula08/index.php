<?php

//GD: CROP

$arquivo = 'fotografar-animais-grandes.jpg';

$width = 300;
$height = 300;
$finalX = 0;
$finalY = 0;

$info = getimagesize($arquivo);

list($originalWidth, $originalHeight) = $info;

$ratio = $originalWidth / $originalHeight;
$ratioDest = $width / $height;

$finalWidth = 0;
$finalHeight = 0;

if($ratioDest > $ratio){
     $finalWidth = $height * $ratio;
     $finalHeight = $height;
}else{
     $finalHeight = $width / $ratio;
     $finalWidth = $width;
}

if($finalWidth < $width){
     $finalWidth = $width;
     $finalHeight = $width / $ratio;
     $finalY = -($finalHeight - $height) / 2;
}else{
     $finalHeight = $height;
     $finalWidth = $height * $ratio;
     $finalX = -($finalWidth - $width) / 2;
}

$imagem = imagecreatetruecolor($width, $height);

$original = imagecreatefromjpeg($arquivo);

imagecopyresampled(
     $imagem,
     $original,
     $finalX, $finalY, 0, 0,
     $finalWidth, $finalHeight,
     $originalWidth, $originalHeight
);

header('Content-Type: image/jpeg');

imagejpeg($imagem, null, 100);

?>