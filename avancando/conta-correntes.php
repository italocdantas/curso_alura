<?php
$conta1 = [
        'titular' => 'Italo',
        'saldo' => 1000];

$conta2 = [
        'titular' => 'Waldir',
        'saldo' => 10];
    
$conta3 = [
            'titular' => 'Marcos',
            'saldo' => 50];

$contasCorrentes = [$conta1, $conta2, $conta3];

for($i = 0; $i < count($contasCorrentes); $i++){
    echo " Titular: ". $contasCorrentes[$i]['titular'] . PHP_EOL . " Saldo: ". $contasCorrentes[$i]['saldo']. PHP_EOL;
}