<?php

$texto = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
$newTexto = file_get_contents('lista.txt');
echo $newTexto .= ",$texto";

if(empty($texto)){
    header('location: index.php');
    exit;
}else{
    file_put_contents('lista.txt', $newTexto);
    header('location: index.php');
    exit;
}