<?php
print_r(campeao([5,6,7], [3,6,7]));
print_r(campeao([17,87,34], [22,75,76]));

function campeao($a, $b){
    $placar = [0,0];
    for($i=0; $i<count($a); $i++){
        if($a[$i] < $b[$i]) $placar[1]++;
        if($a[$i] > $b[$i]) $placar[0]++;
    }
    return $placar;
}