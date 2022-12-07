<?php

$altura = 1.87;
$peso = 80;
$imc = $peso / $altura ** 2;

if ($imc < 18.5){
   echo "Seu IMC é de $imc e você está abaixo do peso" . PHP_EOL;
}elseif ($imc > 18.5 && $imc < 24.9){
    echo "Seu IMC é de $imc e está com o peso normal" . PHP_EOL;
}else{
    echo "Seu IMC é de $imc Você está com sobrepeso" . PHP_EOL;

}