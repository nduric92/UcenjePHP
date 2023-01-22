<?php
        //ugradjene varijable
        echo $_GET['broj'], '<hr>';

        //print r ispisuje varijablu i vrednost varijable
        echo '<pre>';
        print_r($_GET);
        echo '</pre>', '<hr>';

        //var dump ispisuje varijablu, vrednost i tip podatka
        echo '<pre>';
        var_dump($_GET);
        echo '</pre>', '<hr>';

        //inline if (echo $godine>=18 ? 'Punoljetan' : 'Maloljetan';)
        $godine=25;
        echo $godine>=18 ? 'Punoljetan' : 'Maloljetan', '<br>';

        echo '<hr>';
        if(isset($_GET['br'])){
            echo $_GET['br'], '<br>';
        }else{
            echo 'Postavite GET parametar br', '<br>';
        }

        //inline isset!!!
        $b = isset($_GET['b']) ? $_GET['b'] : 0;

        echo '<hr>';

        $n=isset($_GET['prvi'])?$_GET['prvi']:5;
        $m=isset($_GET['drugi'])?$_GET['drugi']:5;

        $n=5;
        $m=5;
        $matrica=[];

        for($i=0;$i<$n;$i++){
            $red=[];
            for($j=0;$j<$m;$j++){
                $red[]=1; // u niz red dodaj element s vrijednošću 0
            }
            $matrica[]=$red;
        }
        
        
        for($i=0;$i<$n;$i++){
            for($j=0;$j<$m;$j++){
              echo $matrica[$i][$j] . ' ';
            }
            echo '<br>';
        }

        echo'<hr>';

//FOR PETLJA

echo '<table>';
for($i=1; $i<=10; $i++){
        echo '<tr>';
        for($j=1; $j<=10; $j++){
            echo '<td>'. $i * $j, '</td>';
        }
    }
echo '</table>';

echo '<hr>';

for ($i=1; $i<=5; $i++){
    echo 'Nemanja ' . ( $i) . '<br>';
}

echo '<hr>';

$poc = 1;
$kraj=20;
for ($i=1; $i<=6; $i++){
    if($i%2===0){
    echo 'Nemanja ' . ( $i++) . '<br>';
    }
}

echo '<hr>';

for($i=0;$i<10;$i=$i+3){
    echo 'Osijek ' . ($i+1), '<br>';
}

