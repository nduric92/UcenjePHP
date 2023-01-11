<?php
//moj pokusaj
$b1 = isset($_GET['b1']) ? $_GET['b1'] : 0;
$b2 = isset($_GET['b2']) ? $_GET['b2'] : 0;
$b3 = isset($_GET['b3']) ? $_GET['b3'] : 0;

if($b1===$b2 && $b2===$b3){
    echo 'Svi brojevi su jednaki';    
}else if($b1>$b2 && $b2>$b3){
    echo $b3;
}else if($b1<$b2 && $b2<$b3){
    echo $b1;
}else if($b1>$b2 && $b2<$b3){
    echo $b2;
}else if($b1==$b2 && $b2<$b3){
    echo $b2;
}else if($b1>$b2 && $b2==$b3){
    echo $b2;
}else if($b1==$b3 && $b2>$b3){
    echo $b1;
}

