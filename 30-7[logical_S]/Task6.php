<?php
function checkrange($value){
if($value>=20 && $value<=50){
    echo "$value is in range [20 - 50]";
}
else{
    echo "$value is not in range [20 - 50]";

}
}

checkrange(25);

?>

<!-- 6.	Write a PHP script to check if the integer value is in the range of [20-50] inclusive.
Sample Input: number = 50
Sample Output: ‘true’ -->
