<?php
$nome = 'Vinicius Dias';
$ehDaMinhaFamilia = str_contains($nome, 'Dias');

if($ehDaMinhaFamilia){
    echo "$nome é da minha familia" . PHP_EOL;
}else{
    echo "$nome não é da minha familia" . PHP_EOL;}


