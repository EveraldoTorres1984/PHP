<?php


/* // Loop While(Atenção para não entrar em Loop infinito)
$numero = 0;

while ($numero <= 10) {
    echo 'N: ' . $numero . '<br/>';
    $numero++;
} */

/* //Loop FOR(Mais Seguro que o While)

for ($numero = 0; $numero <= 10; $numero++) {
    echo 'N: ' . $numero . '<br/>';
} */

// Loop FOREACH

$ingredientes = [
    'açucar',
    'leite',
    'fermento',
    'farinha',
    'ovo',
    'chocolate'
];


//Exibir todos os valores dentro do array sem as respectivas chaves(mais utilizado).

echo '<ul>';
foreach($ingredientes as $ingrediente){
    echo '<li>'.$ingrediente.'</li>';
}
echo '</ul>';

//Caso precise apresentar a chaves dos itens do array.

/* foreach ($ingredientes as $chave => $valor) {
    echo "Item: " . ($chave + 1) . ": " . $valor . '<br/>';
} */
