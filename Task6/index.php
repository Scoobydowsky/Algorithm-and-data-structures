<?php

$array = [[5, 6, 9, 2, 3], [8, 6, 7, 3, 5], [5, 3, 7, 6, 2], [4, 3, 6, 3, 8], [1, 6, 7, 2, 8]];
echo "Data to where start searching".PHP_EOL;
$firstDimetionStart = readline("First dimention of array: ");
$secondDimetionStart = readline("Second dimention of array: ");
echo "Data to where end searching".PHP_EOL;
$firstDimetionEnd = readline("First dimention of array: ");
$secondDimetionEnd = readline("Second dimention of array: ");
$searched = readline("What are we searching?: ");

if((5 > $firstDimetionStart) && (5 >$secondDimetionStart) && (0 < $firstDimetionStart) && (0 < $secondDimetionStart) && (5 > $firstDimetionEnd) && ($firstDimetionStart <= $firstDimetionEnd) && ($secondDimetionStart <= $secondDimetionEnd)){
    for($i = $firstDimetionStart ; $i <= $firstDimetionEnd ; $i++){
        for($j = $secondDimetionStart; $j <= $secondDimetionEnd ; $j++){
            if($array[$i][$j] == $searched){
                echo "Znaleziono wartość w tablicy[$i][$j] = ".$searched.PHP_EOL;
            }
        }
    }
}else{
    echo "Podałeś złe wartości".PHP_EOL;
}