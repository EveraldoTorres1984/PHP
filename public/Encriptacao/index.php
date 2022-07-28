<?php

//Usando password hash
/* $senha = '12345';

$hash = password_hash($senha, PASSWORD_DEFAULT);


echo "SENHA ORIGINAL: " . $senha . "<br/>";
echo "HASH: " . $hash; */

//Usando md5
$senha = '1234';

$hash = md5($senha);

echo $hash;
