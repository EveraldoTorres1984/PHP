<?php

/* //Exercício: Montando uma tabela vertical.

$array = [
    'nome' => 'Everaldo',
    'idade' => 37,
    'empresa' => 'CRM',
    'cor' => 'Azul',
    'Profissao' => 'DevWeb'
];
?>
<table border="1">
    <?php foreach ($array as $chave => $valor) : ?>
        <tr>
            <th><?php echo $chave; ?></th>
            <td><?php echo $valor; ?></td>
        </tr>
    <?php endforeach ?>
</table> */

//Exercício: Montando uma tabela horizontal.
$array = [
    'nome' => 'Everaldo',
    'idade' => 37,
    'empresa' => 'CRM',
    'cor' => 'Azul',
    'Profissao' => 'DevWeb'
];


$chaves = array_keys($array);
$valores = array_values($array);
?>
<table border="1">
    <tr>
        <?php foreach ($chaves as $chave) : ?>
            <th><?php echo $chave; ?></th>
        <?php endforeach; ?>
    </tr>
    <tr>
        <?php foreach ($valores as $valor) : ?>
            <td><?php echo $valor; ?></td>
        <?php endforeach; ?>

    </tr>
</table>