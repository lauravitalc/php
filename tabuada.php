<?php

/*2) Crie um algoritmo que solicite a entrada de um número, e exiba a tabuada de 0 a 10 de acordo com o número solicitado, ex: 
Entrada = 4
Saída = 4 X 0 = 0...4 X 10 = 40.*/

$numero = 7;
$resultado = 0;

if($numero >= 0 && $numero <= 10){
    for($i=0;$i<=10;$i++){
        $resultado = $numero * $i;
        echo $resultado . '<br>'; 
    }
} else {
    echo 'Escolha número entre 0 a 10';
}