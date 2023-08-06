<?php
function BillValue($value){
if($value<=50){
    $resault = $value*2.50;
}
elseif($value>50 && $value<=250){
    $resault = $value*5;
}
else{
    $resault = $value*7.50;
}
return $resault;
}
echo BillValue(80);
?>

<!-- 8.	Write PHP script to calculate the monthly electricity bill according to these rules
 
a.	For first 50 units – 2.50 JOD/Unit
b.	For next 100 units – 5.00 JOD/Unit
c.	For next 100 units – 6.20 JOD/Unit
d.	For units above 250 – 7.50 JOD/Unit -->
