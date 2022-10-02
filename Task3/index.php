<?php

$sg = readline("Podaj stawkę godzinową: ");
$lg = readline("Podaj liczbę godzin: ");

if($lg > 40){
    $nadgodziny = $lg - 40;
    $wynagrodzenie = $lg * $sg + $nadgodziny * $sg;

}else{
    $wynagrodzenie = $lg * $sg ;
}
echo "Wynagrodzenie wynosi: $wynagrodzenie PLN".PHP_EOL;
$question = readline("Czy chcesz policzyć podatki [y] czy zamknac program [dowolny inny klawisz] ?");
if($question == "y" || $question == "Y"){
    $wynagrodzenie_roczne = $wynagrodzenie * 52;
    if($wynagrodzenie_roczne > 1361){
        if($wynagrodzenie_roczne > 85528){
            $podatek_stawka = 32;
            $podatek_kwota = 84168 * 0.17 + ($wynagrodzenie_roczne - 85528) * 0.32;
            $wynagrodzenie_roczne_netto = $wynagrodzenie_roczne - $podatek_kwota;
        }
        else{
            $podatek_stawka = 17;
            $podatek_kwota = ($wynagrodzenie_roczne - 1360) * 0.17;
            $wynagrodzenie_roczne_netto = $wynagrodzenie_roczne - $podatek_kwota;
        }
    }else{
        $podatek_stawka = 0 ;
        $podatek_kwota = 0 ;
        $wynagrodzenie_roczne_netto = $wynagrodzenie_roczne;
    }
    echo "---WYNIK ROCZNY---".PHP_EOL;
    echo "Zarobiłeś brutto: $wynagrodzenie_roczne PLN".PHP_EOL;
    echo "Twoja stawka podatkowa to $podatek_stawka %".PHP_EOL;
    echo "Łącznie pobrano podatku: $podatek_kwota".PHP_EOL;
    echo "Twoje zarobki netto (na rekę) to $wynagrodzenie_roczne_netto PLN".PHP_EOL;
}