<?php
//Create const a,b,c
$a = 1;
$b = 2;
$c = 1;
$delta = pow($b,2)- 4*$a*$c;

//Find result
if ($a == 0){
    if ($b != 0 ){
        echo "x = ";
    }
    echo ($b == 0 ? ( $c == 0 ? 'Countless result' : 'None result') : -$c/$b);
}else{
    if($delta < 0){
        echo 'None result';
    }else{
        echo 'x = '. (-1*$b+sqrt($delta))/(2*$a);
        if($delta > 0 ){
            echo ' or '. (-1*$b-sqrt($delta))/(2*$a);
        }
    }
}