<?php

$b1= isset($_GET['broj1']) ? $_GET['broj1'] : 0;
$b2= isset($_GET['broj2']) ? $_GET['broj2'] : 0;

$red=(int)$b1;
$stupac=(int)$b2;

if($red===0 || $stupac===0){
    echo 'Unesi oba dva broja! <br><hr> broj1=" " broj2=" "';
}

// postavljen if koji proverava jesu li vrednosti koje unosimo putem geta nula
//ukoliko su vrednosti jednake int 0, ispisuje se unesi oba broja


//Pozicioniranje varijabli te postavljanje njihovih vrednosti


$zadnjired=$red-1;       //(-1) postavlja varijablu na zadnje mesto
$zadnjistupac=$stupac-1;   //(-1) isto vredi za pozicioniranje stupca

$prvired=0;
$prvistupac=0;

$ispisuje=1;
$matrix=[];


while($ispisuje <= $red * $stupac){

    for($y=$zadnjistupac; $y>=$prvistupac;$y--){        //od zadnjeg stupca prema prvom stupcu, umanjujemo Y za 1 u svakom polju y
        $matrix[$zadnjired][$y] = $ispisuje++;          //u zadnjem redu, varijablu y popunjava varijablom ispisuje koju uvecava za jedan
    }
    $zadnjired--;                                       //zadnji red koji je sada popunjen smanjuje za jedan
        if($ispisuje > $red*$stupac)                    //provera ukoliko je br $ispisuje veci od umnoska red*stupac, prekida petlju
        break;

    

    for($x=$zadnjired; $x>=$prvired;$x--){              //od zadnjeg reda prema prvom redu, umanjujemo X za jedan u svakom polju x
        $matrix[$x][$prvistupac] = $ispisuje++;         //u prvom stupcu popunjava varijablu x i popunjava varijablom upisuje koju uvecava ++
    }
    $prvistupac++;                                      //prvi stupac X koji je sada popunjen uvecava se za jedan
        if($ispisuje > $red*$stupac)                    //provera ukoliko je br $ispisuje veci od umnoska red*stupac, prekida petlju
        break;


    
    for($y=$prvistupac; $y<=$zadnjistupac;$y++){        //od prvog stupca prema zadnjem stupcu, uvecavamo Y za 1 u svakom polju Y
        $matrix[$prvired][$y] = $ispisuje++;            //u prvom slobodnom redu, varijablu Y popunjava varijablom ispisuje te je uvecava ++
    }
    $prvired++;                                         //Prviom popunjenom redu se sada dodaje jos jedan red
        if($ispisuje > $red * $stupac)                  //provera ukoliko je br $ispisuje veci od umnoska red*stupac, prekida petlju
        break;



    for($x=$prvired; $x<=$zadnjired;$x++){              //od prvog reda prema zadnjem redu, uvecavamo X za 1 u svakom x polju
        $matrix[$x][$zadnjistupac] = $ispisuje++;       //matrica popunjava x u zadnjem stupcu koji nije popunjen  te uvecava ispisuje za 1
    }
    $zadnjistupac--;                                    //Zadnji stupac koji je sada popunjen se smanjuje za jedan
        if($ispisuje > $red*$stupac)                    //provera ukoliko je br $ispisuje veci od umnoska red*stupac, prekida petlju
        break;
   
}


//echo tablica sa vrednostima

for($x=0; $x<$red;){
    for($y=0; $y<$stupac;){
        echo $matrix[$x][$y]. ' ';
        $y++;
    }echo '<br>';
    $x++;
}