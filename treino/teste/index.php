<?php

    $arquivo = 'fotografar-animais-grandes.jpg';

    $maxWidth = 500;
    $maxHeight = 500;

    $info = getimagesize($arquivo);

    list($widthOriginal, $heightOriginal)=$info;

    $ratio = $widthOriginal / $heightOriginal; //1,5
    $ratioDest = $maxWidth / $maxHeight; // 1

    $finalWidth = 0;
    $finalHeight = 0;

    if($ratioDest > $ratio){
        //retrato
        $finalWidth = $maxHeight * $ratio;
        $finalHeight = $maxHeight;
    }else{
        //paisagem
        $finalHeight = $maxWidth / $ratio; // 333
        $finalWidth = $maxWidth; //500
    }

    $imagem = imagecreatetruecolor($finalWidth, $finalHeight);

    $original = imagecreatefromjpeg($arquivo);

    imagecopyresampled(
        $imagem,
        $original,
        0, 0, 0, 0,
        $finalWidth, $finalHeight,
        $widthOriginal, $heightOriginal 
    );

    header('Content-Type: image/jpeg');

    imagejpeg($imagem, null, 100);

?>