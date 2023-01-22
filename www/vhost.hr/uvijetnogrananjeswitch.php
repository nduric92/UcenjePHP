<?php
//visestruko grananje

$grad= 'Osijek';
$ocijena=0;

switch($grad){
    case 'Zagreb';
        $ocijena=1;
        break;
    case 'Split';
        $ocijena=2;
        break;
    case 'Osijek';
    case 'Valpovo';
        $ocijena=5;
        break;
        default:
        // $ocijena='Nedefiniran'; losa praksa 
        $ocijena=-1;
}

echo $ocijena;