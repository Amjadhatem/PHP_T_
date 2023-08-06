<?php
function check($firstNumber , $SecondNumber){
    $sum = $firstNumber + $SecondNumber ;
    if($sum != 30){
        return "False";
    }
    else {
        return "True";
    }
}
echo check(10 , 20);
?>

<!-- 4.	Write PHP to check if the sum of the two given numbers equals 30, if the condition is true the return their sum otherwise return false
Sample Input: [ firstInteger  =>  10 , secondInteger => 10]
Sample Output: ‘false’ -->
