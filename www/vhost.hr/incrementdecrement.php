<?php

$i=1;

$i = $i + 1; //2
// ekvivalent gornjem izrazu
$i += 1;
$i += 2; // $i=$i+2;

$i *= 1;

$i -= 1;

$i /= 1;

$i %= 1;

//najkraći način uvećanja za 1
$i++;


$i=1;
// razlika između ++$i i $i++
// $i++ prvo koristi pa uveća
echo $i++, '<br>'; //ispisao 1 i onda uvećao na 2

echo ++$i, '<br>'; //uvećao na 3 i ispisao


// ista pravila vrijede i za $i-- i --$i;

// Vežbanje

$i=1; $j=2;
$i += ++$j - $i; //j=3 i=3
$j = --$i + $j; //j=5 i=2
echo ++$i + $j--; //8

echo '<hr>';

$i=2; $j=4;
$i += ++$j - $i;
$j = --$i + $j;
echo ++$i + $j--; //dobar

echo '<hr>';

$i=1; $j=4;
$i += ++$j - $i;
$j = --$i + $j;
echo ++$i + $j--; //nije dobar kasnije dobar 14

echo '<hr>';

$i=1; $j=3;
$i += ++$j - $i;
$j = --$i + $j;
echo ++$i + $j--; //dobar

echo '<hr>';

$i=1; $j=0;
$i += ++$j - $i;//j-1 i-1
$j = --$i + $j;//i-0 j-1
echo ++$i + $j--; // 2 DOBAAR