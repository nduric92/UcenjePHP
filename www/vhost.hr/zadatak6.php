<?php

// Program ispisuje zbroj svih primljenih 
// vrjednosti bez obzira na ključ iz $_GET niza

// ulaz ?a=2&b=2&c=2
// izlaz: 6

// ulaz ?xxxxx=2&sdf=2&c1=2
// izlaz: 6


$suma=0;

foreach($_GET as $k=>$v){
    if((int)$v===0){
        continue;
    }
    $suma+=$v;
}
echo $suma;



echo '<hr>';

$suma=0;

foreach($_GET as $k=>$v){
    if((int)$v===0){
        $v=10;
    }
    $suma+=$v;
}
echo $suma;



echo '<hr>';

