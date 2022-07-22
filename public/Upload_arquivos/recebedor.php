<?php

echo '<pre>';

print_r($_FILES);

$permitidos = ['image/jpeg', 'image/jpg', 'image/png'];

if (in_array($_FILES['arquivo']['type'], $permitidos)) {

    $nome = md5(time() . rand(0, 1000)) . '.png';
    move_uploaded_file($_FILES['arquivo']['tmp_name'], 'arquivos/' . $nome);

    echo 'Arquivo salvo com Sucesso!';
}else{
    echo 'Arquivo não permitido!';
}
