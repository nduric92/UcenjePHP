<?php

//genericki izgled for pelje

for($i=0; $i<10; $i=$i+1){
    echo 'Osijek', '<br>';
}

echo '<hr>';

for($i=0; $i<10; $i=$i+1){
    echo 'Osijek ' . ($i+1), '<br>';
}

echo '<hr>';

for($i=0;$i<10;$i=$i+3){
    echo 'Osijek ' . ($i+1), '<br>';
}

echo '<hr>';

for($i=10;$i>0;$i=$i-1){
    echo 'Osijek ' . $i, '<br>';
}

echo '<hr>';

// parni brojeve od 1 do 20
$poc = 1;
$kraj=20;
for($i=$poc;$i<=$kraj;$i=$i+1){
    if($i%2===0){
        echo $i, '<br>';
    }
}

echo '<hr>';

// zbroj prvih 100 brojeva
$zbroj=0;
for($i=1;$i<=100;$i++){
    $zbroj += $i;
}
echo $zbroj;

