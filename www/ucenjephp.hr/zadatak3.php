<?php
$b = isset($_GET['b']) ? $_GET['b'] : 0;
$b1 = isset($_GET['b1']) ? $_GET['b1'] : 0;

if($b===$b1){
    echo 'jednaki su';    
}else if($b>$b1){
    echo $b;
}else {
    echo $b1;
}