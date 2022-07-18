<?php

/* //Condicional simples
$idade = 18;

if ($idade >= 18) {
    echo "Maior de idade";
} else {
    echo "Menor de idade";
} */

/* // Operador Ternário ou Condicional Ternário
$idade = 18;

echo ($idade >= 18) ? "Maior de idade" : "Menor de idade";
 */


/* // Condicional NULL CAO
$nome = 'Everaldo ';
$sobrenome = 'Torres Nel';

$nomeCompleto = $nome;
//$nomeCompleto .= isset($sobrenome) ? $sobrenome : ''; Alternativa "antiga".

// NULL CAO (Simplificação do condicional ternário)
$nomeCompleto.= $sobrenome ?? '';

echo $nomeCompleto; */

// Condicional SWITCH

$tipo = 'foto';

switch ($tipo) {
    case 'foto':
        echo 'Exibindo Foto';
        break;
    case 'video':
        echo 'Exibindo Vídeo';
        break;
    case 'texto':
        echo 'Exibindo Texto';
        break;
}
