<?php
echo maior([20,40,23.4,79,100,105,7]);
function maior($pacotes){
    $maior = 0;
    for($i=0;$i<count($pacotes);$i++){
        if($pacotes[$i] > $maior){
            $maior = $pacotes[$i];
        }
        // $maior = ($pacotes[$i] > $maior) ? $pacotes[$i]:$maior; 
    }
    return $maior;
}

// ou utilizar a função max($pacotes) :)