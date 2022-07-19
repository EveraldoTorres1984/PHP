<?php


/* //Criando a Função
function subsequente(){
    for ($q=1; $q <=10 ; $q++) { 
        echo $q.'<br/>';
    }
    echo '<hr/>';
}

//Chamando a Função
subsequente(); */

/* //Parametros -> Definição normal
function somar($n1, $n2)
{
    $total = $n1 + $n2;
    return $total;
}
$soma = somar(25, 5);
echo "Resultado: " . $soma;
 */

//Type e valor padrão
/* function somar($n1, $n2, $n3 = 0)
{
    $total = $n1 + $n2 + $n3;
    return $total;
}

$x = somar(1, 2);
$y = somar(2, 4, 3);
$w = somar($x, $y);

echo $w;
 */

/* //Referência e Valor
function somar($n1, $n2)
{
    $total = $n1 + $n2;
    return $total;
}

$x = 3;
$y = 87;

$soma = somar($x,$y);

echo "Resultado: " . $soma; */


/* //Utilizando a Referência
function somar($n1, $n2, &$total)
{
    $total = $n1 + $n2;
    
}

$x = 3;
$y = 87;
$soma =0;

somar($x,$y, $soma);

echo "Resultado: " . $soma; */

/* //Funções Anônimas


$dizimo = function (int $valor) {
    return $valor * 0.1;
};

echo $dizimo(100); */

/* //Arrow function
$dizimo = fn($valor)=> $valor * 0.1;

echo $dizimo(200); */

/* //Funções Recursivas
function dividir($numero)
{
    $metade = $numero / 2;   
    echo $metade . '<br/>';
    if (round($metade) > 0) {
        dividir($metade);
    }
}
dividir(100);
 */

//Funções Nativas de Matemática
//$numero = 2.65;
//echo floor($numero); //***Arredonda para baixo***
//echo ceil($numero); //***Arredonda para cima*** */
//echo round($numero, 2); //***Arredonda dependendo do numero( o ,2 são as casas decimais após a vírgula)***
//echo $aleatorio = rand(3, 9); //***Gera um numero aleatorio entre os valores informados***

/* $lista = [5, 3, 7, 200, 201];
echo "O menor é: " . min($lista).'<br/>';
echo "O maior é: " . max($lista);
 */

//Funções Nativas de String
/* $nomeSujo = '     Torres    ';
$nomeLimpo = trim($nomeSujo); //Retira os caracteres a mais(vazios), do campo.

echo "Nome Sujo: " . strlen($nomeSujo) . '<br/>';
echo "Nome Limpo: " . strlen($nomeLimpo);
 */

//$nomeCompleto = 'everaldo torres nel';
//echo strtolower($nome);
//echo strtoupper($nome);
//echo $nomeAlterado = str_replace('Torres', 'Júnior', $nome);
/* $nome = substr($nomeCompleto,2,6);
echo $nome;
 */

/* $posicao = strpos($nomeCompleto, 'a'); // informa em qual posição está o caractere desejado, pela primeira vez.
 echo $posicao; */

/* echo ucfirst($nomeCompleto); //Transforma a primeira letra da palavra em maiúscula. */

/* echo ucwords($nomeCompleto); //Transforma a primeira letra de cada palavra em maiúscula.
 */

/* $nomes = explode(' ', $nomeCompleto); // Transforma cada nome da String em um item de um array
print_r($nomes); */

/* $numero = 123345.13;
echo number_format($numero, 2,',','.'); */

//Funções Nativas de Array
/* $lista = ['nome1', 'nome2','nome3','nome4','nome5'];
echo "Total: ".count($lista); */ //Retorna o total de itens dentro do array.

/* $lista = ['everaldo', 'anderson', 'joão', 'jair', 'debora', 'cassio'];
$aprovados = ['everaldo', 'debora','jair'];

$reprovados = array_diff($lista, $aprovados); //verifica a diferença entre o primeiro e o segundo array, gerando um novo array contendo os itens da primeira lista que nao estão na segunda.
print_r($reprovados);
 */

/* $numeros = [10, 20, 51, 80, 99];

$filtrados = array_filter($numeros, function ($item) {
    if ($item > 20) {
        return true;
    } else {
        return false;
    }
});
print_r($filtrados); //Cria um novo array só com o valores que passam pelo filtro. */

/* $numeros = [10, 20, 51, 80, 99];

$dobrados = array_map(function ($item) {
    return $item * 2;
}, $numeros);

print_r($dobrados); //Permite fazer alterações dentro dos itens no array.
 */

$numeros = [10, 20, 51, 80, 99];

/* //array_pop($numeros); //Remove o último item do array
//array_shift($numeros); //Remove o primeiro item do array
print_r($numeros); */

if (in_array(20, $numeros)) {
    echo 'Existe';
} else {
    echo 'Não Existe'; //Faz uma pesquisa dentro ao array para saber se o valor existe ou não.
}
