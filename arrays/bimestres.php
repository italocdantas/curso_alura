<?php
$notasBimestre1 = [
    'Ana' => 10,
    'João' => 8,
    'Maria' => 9,
    'Roberto' => 7,
    'Vinicius' => 6
];



$notasBimestre2 = [
    'Ana' => 8,
    'João' => 6,
    'Maria' => 4,
    'Roberto' => 5,
];
//teste2

var_dump(array_diff_assoc($notasBimestre1, $notasBimestre2));