<?php
function test($x , $y){
if($x == $y){
    $sum = ($x+$y)*3;
}
return $sum;
}
echo test(4 , 4);
?>

<!-- 3.	Write a PHP script to calculate the sum of the two integers. If the two values are the same, then calculate the triple of their sum.
Sample Input: [ firstInteger  =>  2 , secondInteger => 2]
Sample Output: ( 2 + 2 ) * 3 = 12
Sample Output: ‘It is summertime!’ -->
