<?php
$text = <<<EOD
Wybierz opcje z menu:
[1] suma
[2] suma kwadratów
[3] średnia arytmetyczna
[4] koniec programu
EOD;
$a = readline("Podaj liczbe a:");
$b = readline("Podaj liczbe b:");
do{
    echo $text.PHP_EOL;
    $choose = readline("Wybór: ");
    PHP_EOL;
    switch ($choose){
        case 1: echo sum($a , $b);break;
        case 2: echo sqrSum($a , $b);break;
        case 3: echo avg($a, $b);break;
        default: echo "Wybierz jeszcze raz";
    }
}while(($choose > 4) || ($choose == 0) );

function sum(int $a , int $b): int {
    $sum = 0;
    for ($i = $a ; $i <= $b; $i++){
        $sum += $i;
    }
    return $sum;
}

function sqrSum(int $a , int $b):int {
    $sum = 0;
    for ($i = $a ; $i <= $b ; $i++){
        $sum += $i * $i;
    }
    return $sum;
}
function avg(int $a , int $b):float{
    $avg = 0.0;
    $counter = 0 ;
    $sum= 0;
    for ($i = $a ; $i <= $b ; $i++){
        $sum += $i;
        $counter++;
    }
    $avg = $sum / $counter;
    return $avg;
}