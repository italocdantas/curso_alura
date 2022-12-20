<?php

$num = 8;

if($num > 0){
    $valor = $num;
    for($i =($valor - 1); $i > 0; $i--){
        $valor = $i * $valor;
    
    }
    }else{
        $valor = 0;
    };

echo "!{$num} = {$valor}" . PHP_EOL;