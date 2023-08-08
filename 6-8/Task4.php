<?php
function swap($x , $y){
    $F_V = $x;
    $temp = $y;
    $F_V = $temp; 
    $temp = $x;
    echo "x=$F_V and y=$temp" ;
}
swap(1 , 2);
?>