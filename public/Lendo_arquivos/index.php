<?php


/* //Lendo arquivos externos
$texto = file_get_contents('texto.txt');
$texto = explode("\n", $texto);

echo "Linhas: ".count($texto); */

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

/* // Excluindo um arquivo
unlink('nome.txt');
echo "Excluído com sucesso"; */

/* //Renomeando arquivo
rename('texto.txt', 'texto2.txt'); */

/* //Movendo arquivo
rename('texto2.txt', 'exercicio/texto2.txt'); */

/* //Copiando o arquivo
copy('exercicio/texto2.txt', 'texto.txt'); */

