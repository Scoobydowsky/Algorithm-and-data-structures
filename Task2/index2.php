<?php
$firstNumber = readline("Podaj pierwszą liczbę: ");
$secondNumber = readline("Podaj druga liczbę: ");

do{
    if ($firstNumber > $secondNumber){
        $firstNumber = $firstNumber - $secondNumber;
    }else{
        $secondNumber = $secondNumber - $firstNumber;
    }
}while ($firstNumber != $secondNumber);
echo $firstNumber;