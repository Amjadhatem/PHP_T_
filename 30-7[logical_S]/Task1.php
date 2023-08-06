<?php
$year = 2013;  
 
if((0 == $year % 4) & (0 != $year % 100) | (0 == $year % 400))
{
echo "$year is a Leap Year.";    
}
 
else  
{  
echo "$year is not a Leap Year.";    
}
?>

<!-- 1.	Write a PHP script to see if the specified year is a leap year or not.
Sample Input: 2013
Sample Output: ‘This year is not a leap year’ -->
