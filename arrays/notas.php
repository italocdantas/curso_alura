<?php
$notas = [
    'Ana' => 10,
    'João' => 8,
    'Maria' => 9,
    'Roberto' => 7,
    'Vinicius' => 6
];

ksort($notas);
var_dump($notas);

if (is_array($notas)) {
    echo "Sim, é um array!!!";
};

var_dump(array_is_list($notas));

echo 'Ana fez a prova: ' . PHP_EOL;
var_dump(isset($notas['Ana']));

echo 'Alguem tirou nota 10? ' . PHP_EOL;
var_dump(in_array(10, $notas, true));

echo 'Quem tirou 10? ' . PHP_EOL;
echo array_search(10, $notas) . PHP_EOL;

