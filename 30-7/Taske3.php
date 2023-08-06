<?php
function test($x , $y){
if($x == $y){
    $sum = ($x+$y)*3;
}
return $sum;
}
echo test(4 , 4);
?>