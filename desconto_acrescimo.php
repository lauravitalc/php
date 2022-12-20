<?php

$valor = 130;
$porcentagem = 20;

$desconto = ($valor * (100 - $porcentagem)/100);
$acrescimo = ($valor * (100 + $porcentagem)/100);

echo $desconto . '<br>' . $acrescimo . '<br>';

