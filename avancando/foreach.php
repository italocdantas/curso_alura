<?php
$contasCorrentes = [
             12345678910 => [
                'titular' => 'Italo',
                'saldo' => 1000], 

             12345678911 => [
                'titular' => 'Waldir',
                'saldo' => 10], 

             12345678912 => [
                'titular' => 'Marcos',
                'saldo' => 50]
];
foreach($contasCorrentes as $cpf => $conta){
    echo $cpf . PHP_EOL;
    echo $conta . PHP_EOL;
    //novo teste
}