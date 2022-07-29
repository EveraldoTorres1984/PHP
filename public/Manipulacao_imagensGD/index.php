<?php

/* //Gerando uma imagem do zero
$imagem = imagecreatetruecolor(300, 300);//(largura,altura)

$cor = imagecolorallocate($imagem, 255, 0, 0);//(variavel, R,G,B);
imagefill($imagem, 0, 0, $cor);//(variavel da imagem, Eixo(X), Eixo(y),variavel da cor) */


//Mostrando a imagem na tela
/* header("Content-Type: image/png");
imagepng($imagem, null);
 */

//Criando uma nova imagem
//imagepng($imagem,'nova_imagem.png');

//Resize
/* $arquivo = 'puff.png';
$maxWidth = 500;
$maxHeight = 300;

list($originalWidth, $originalHeight) = getimagesize($arquivo);

$ratio = $originalWidth / $originalHeight;
$ratioDest = $maxWidth / $maxHeight;

$finalWidth = 0;
$finalHeight = 0;

if ($ratioDest > $ratio) {
    $finalWidth = $maxHeight * $ratio;
    $finalHeight = $maxHeight;
} else {
    $finalHeight = $maxWidth / $ratio;
    $finalWidth = $maxWidth;
}

$imagem = imagecreatetruecolor($finalWidth, $finalHeight);
$originalImg = imagecreatefrompng($arquivo);

imagecopyresampled($imagem, $originalImg, 0, 0, 0, 0, $finalWidth, $finalHeight, $originalWidth, $originalHeight);

//header("Content-Type: image/png");
imagepng($imagem,'puff_novo.png'); */

//Crop

$arquivo = 'puff.png';
$width = 300;
$height = 300;
$finalX = 0;
$finalY = 0;

list($originalWidth, $originalHeight) = getimagesize($arquivo);

$ratio = $originalWidth / $originalHeight;
$ratioDest = $width / $height;

$finalWidth = 0;
$finalHeight = 0;

if ($ratioDest > $ratio) {
    $finalWidth = $height * $ratio;
    $finalHeight = $height;
} else {
    $finalHeight = $width / $ratio;
    $finalWidth = $width;
}

if ($finalWidth < $width) {
    $finalWidth = $width;
    $finalHeight = $width / $ratio;

    $finalY = -(($finalHeight - $height) / 2);
} else {
    $finalHeight = $height;
    $finalWidth = $height * $ratio;

    $finalX = -(($finalWidth - $width) / 2);
}

$imagem = imagecreatetruecolor($width, $height);
$originalImg = imagecreatefrompng($arquivo);

imagecopyresampled($imagem, $originalImg, $finalX, $finalY, 0, 0, $finalWidth, $finalHeight, $originalWidth, $originalHeight);

header("Content-Type: image/png");
imagepng($imagem, null);
