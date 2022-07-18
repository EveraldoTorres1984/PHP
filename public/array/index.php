

<?php

//Exercicio para juntar atributos(variaveis) dentro de arrays diferentes.

$lista =[
    'nome'=> 'Everaldo',
    'idade' => 37,
    'atributos' =>[
        'forca' =>70,
        'agilidade' =>80,
        'destreza'=> 55
    ],

    'vida'=> 1000,
    'mana' => 850
];

echo "Nome: ". $lista['nome'].'<br/>';
echo "Idade: ". $lista['idade'].'<br/>';
echo "Atributos: ". '<br/>';
echo "Força: ". $lista['atributos']['forca']. '<br/>';
echo "Agilidade: ". $lista['atributos']['agilidade']. '<br/>';
echo "Destreza: ". $lista['atributos']['destreza']. '<br/>';
echo "Vida: ". $lista['vida']. '<br/>';
echo "Mana: ". $lista['mana'];
