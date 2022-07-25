<?php


/* // Array Range (Também pode ser feito com Strings)
$array = range(1,20);

foreach($array as $itens){
    echo  $itens. '<br/>';
} */



/* $array = [
    'nome' => 'Everaldo',
    'idade' => 37,
    'empresa' => 'CRM',
    'cor' => 'Azul',
    'Profissao' => 'DevWeb'
];

// key_exists
if (key_exists('idade', $array)) {
    $idade = $array['idade'];
    echo $idade . ' anos';
} else {
    echo 'Não tem idade';
} */

/* //Pega apenas as chaves e faz um novo array.
$chaves = array_keys($array);
print_r($chaves); */


/* //Pega apenas os valores e faz um novo array.
$valores = array_values($array);
print_r($valores); */


//$array = ['a','b','c','d','e', 'f'];


/* //Array Slice
$retorno = array_slice($array, 0, 2);
print_r($retorno); */

/* //Array Splice
array_splice($array, 1, 2);
print_r($array); */

//Array Reduce 

/* $numeros = [1, 2, 3, 4, 5];

function somar($subtotal, $item){
    $subtotal += $item;
    return $subtotal;
}


$total = array_reduce($numeros, 'somar');

echo $total; */

/* $pessoas = [
    ['nome' => 'Fulano', 'sexo' => 'M', 'nota' => 9],
    ['nome' => 'Cilcano', 'sexo' => 'M', 'nota' => 8],
    ['nome' => 'Beltrana', 'sexo' => 'F', 'nota' => 6],
    ['nome' => 'Paulo', 'sexo' => 'M', 'nota' => 7],
    ['nome' => 'Cintia', 'sexo' => 'F', 'nota' => 5],
    ['nome' => 'Flavia', 'sexo' => 'F', 'nota' => 9]
];

//total de homens
function contar_m($subtotal, $item)
{
    if ($item['sexo'] === 'M') {
        $subtotal++;
    }
    return $subtotal;
}
$total_m = array_reduce($pessoas, 'contar_m');

//Soma notas dos homens
function soma_m($subtotal, $item)
{
    if ($item['sexo'] === 'M') {
        $subtotal += $item['nota'];
    }
     return $subtotal;
}
$soma_m = array_reduce($pessoas, 'soma_m');

//media dos homens
$media_m = $soma_m / $total_m;

echo "Total de homens: " . $total_m . '<br/>';
echo "Soma das notas dos homens: " . $soma_m . '<br/>';
echo "Média das notas dos homens: " . $media_m;
 */

//Desconstruir Array usando List

$array = ['Everaldo', 37, 'suco','maracujá'];

list($nome, $idade, $bebida,$sabor) = $array;

echo $nome.' tem '. $idade.' anos e gosta de '. $bebida . ' de '.$sabor;