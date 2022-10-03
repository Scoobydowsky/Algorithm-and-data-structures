<?php

$array = [10, 7, 13, 88, 55, 28, 8, 20, 7, 55];

for ($i = 0; $i < 9; $i++) {
    for ($j = 0; $j < 9; $j++) {
        if($array[$j] > $array[$j + 1]){
            [$array[$j] , $array[$j + 1] ]= [$array [$j + 1] , $array[$j]];
        }
    }
}

for($j = 0 ; $j < 9 ; $j++){
    echo "$array[$j] ";
}