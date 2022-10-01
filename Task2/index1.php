<?php

$silnia = readline("Wpisz wartość slini: ");
$sum =1;
for($i = 1 ; $i <= $silnia ; $i++){
    $sum *= $i;
}
echo $sum;