<?php

$indeksniniz= [0,2,3,5,4,6];

for($i=0; $i<count($indeksniniz); $i++){
    echo $indeksniniz[$i], '<br>';
}

echo '<hr>';
//ekvivalent gornjoj

foreach($indeksniniz as $vrijednost){
    echo $vrijednost, '<br>';
}

echo '<hr>';

$asocijativniniz =[
    'visina' => 12,
    'duzina' => 15,
    'sirina' => 10
];

//ispisuje samo vrednosti 12 15 10
foreach($asocijativniniz as $vrijednost){
    echo $vrijednost, '<br>';
}

foreach($asocijativniniz as $kljuc => $vrijednost){
    echo 'kljuc ' . $kljuc . ' ima vrednost ' . $vrijednost . '<br>';
}

echo '<hr>';

//iz niza €_SERVER ispisati sve kljuceve i vrednosti 
//koji u delu naziva kljuca imaju slovo b
$slovo='b';
foreach($_SERVER as $k => $v){      //$k - kljuc, $v - vrijednost
    if(strpos(strtolower ($k), $slovo)>0)
    echo 'kljuc ' . str_replace($slovo, '<span style="font-weight: bold">' . $slovo . '</span>', strtolower($k))
     . $k . ' ima vrijednost ' .$v, '<br>';
}