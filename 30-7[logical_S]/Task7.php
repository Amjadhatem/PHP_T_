<?php
function checklargest($a , $b , $c){
    if($a>$b && $a>$c){
        echo "$a is the largest number";
    }
    elseif ($b>$a && $b>$c) {
        echo "$b is the largest number";

    } else {
        echo "$c is the largest number";
    }
}
checklargest(8 , 12 , 10);
?>

<!-- 7.	Write PHP script to find the largest number between the three integers
Sample Input: [ 1, 5, 9 ]
Sample Output: 9 -->
