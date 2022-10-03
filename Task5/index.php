<?php

do{
    $arrayLenght = readline("How long you want create array: ");
}while($arrayLenght < 1);

for ($i = 0 ; $i <= ($arrayLenght - 1); $i++){
    $array[$i] = readline("Write number: ");
}
echo "Pierwszy element tablicy: ".PHP_EOL;
echo PHP_EOL.$array[0].PHP_EOL;
echo "Zawartosc tablicy: ".PHP_EOL;
var_dump($array);
$differce = $array[0] - $array[$arrayLenght-1];
echo PHP_EOL.abs($differce).PHP_EOL;
echo "Suma liczb: ".array_sum($array).PHP_EOL;


do{
$question = readline("Wybierz element tablicy od 1 do {$arrayLenght}: ");
}while($question <=0 && $question >= $arrayLenght);
$arrayLenghtTrue = $question - 1 ;
echo "$question Element tablicy: ".$array[$arrayLenghtTrue];

