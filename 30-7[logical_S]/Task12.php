<?php
function average($num){
    if($num<60){
        return "F";
    }
    elseif($num<70){
    return "D";
    }
    elseif($num<80){
        return "C";
    }
    elseif($num<90){
        return "B";
    }
    else{
        return "A";
    }
}
echo average(79);
?>


<!-- 12.	Write a PHP to find the grade for the student, after calculating the average of his score in all the subject 

Sample Inputs: [60,86,95,63,55,74,79,62,50]
Sample Output: ‘D’ -->
