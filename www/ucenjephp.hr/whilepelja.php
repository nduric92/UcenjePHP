<?php

//while radi s boolean tipom podatka

$uvijet=true;
$i = 1;

while($uvijet){
    echo $i++, '<br>';
    if($i>10){
        $uvijet=false;
    }
}

echo '<hr>';

while($uvijet){
    echo $i++, '<br>';
    if($i>10){
        $uvijet=false;
    }
}

//beskonacna while petlja

while(true){
    break; //izlaz iz beskonacne petlje
}