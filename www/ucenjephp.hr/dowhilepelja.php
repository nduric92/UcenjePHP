<?php

//obavezno izvodjenje jednom unutar petlje

//uvijet se proverava na kraju petlje
//u hwile se proverava na pocetku petlje za razliku od ove vrste petlje

$uvijet=false;

do{

    echo 'Osijek';
}while($uvijet); //provera uvijeta na kraju petlje


while($uvijet){
    echo 'zagreb';
};

//beskonacna do while petlja

do{
    //ovo se izvodi
    break;
    //ovo se ne izvodi 
}while(true);