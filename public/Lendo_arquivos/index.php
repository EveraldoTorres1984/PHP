<?php


//Lendo arquivos externos
$texto = file_get_contents('texto.txt');
$texto = explode("\n", $texto);

echo "Linhas: ".count($texto);

/* //Escrevendo em arquivos
$texto = 'Everaldo Torres';

file_put_contents('nome.txt', $texto);

echo 'Arquivo criado com sucesso';
 */

 /* //Lendo e alterando um arquivo de texto
 $texto = file_get_contents('texto.txt');
 $texto .= "\n Everaldo Torres";
 file_put_contents('texto.txt', $texto);

 echo "Alterado com sucesso"; */