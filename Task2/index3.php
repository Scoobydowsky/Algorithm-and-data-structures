<?php

function fibonacci(int $number):int{
    if($number == 1 || $number == 2){
        return 1;
    }else{
        return fibonacci($n = $number-1) + fibonacci($n1 = $number-2);
    }
}

$number = readline("Podaj liczbę: ");
echo "f(".fibonacci($number).")";