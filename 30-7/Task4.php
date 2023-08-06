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