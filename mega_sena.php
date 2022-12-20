<?php

// 6 números, de 1 a 60, sem números repetidos, em um array.

$numeros = array();

while (count($numeros) <= 5){
    $rand = rand(1,60);

    if(!in_array($rand, $numeros)) {
        $numeros[] = $rand;
    }
}
print_r($numeros);