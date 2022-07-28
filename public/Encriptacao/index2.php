<?php


//Usando o password_verify
/* $hash = '$2y$10$KIB/wHJybbzDl8mW53leg.ePjcuTcQE5Nf4gtMj.yyE2I3Ys61amW';
$senha = '1234';

if (password_verify($senha, $hash)) {
    echo 'Senha Correta';
}else{
    echo 'Senha ERRADA';
} */

$hash = '81dc9bdb52d04dc20036dbd8313ed055';
$senha = '1234';

if (md5($senha) == $hash) {
    echo "Senha correta";
} else {
    echo "Senha errada";
}
