<?php
class dates{
    public $F_Date;
    public $S_Date;
    function __construct($F_Date , $S_Date){
        $this->Date1 = new DateTime($F_Date);
        $this->Date2 = new DateTime($S_Date);
    }
    function Calc(){
        $x = $this->$Date1->diff($this->Date2);
        $year = $x->y;
        $month= $x->m;
        $day  = $x->d;
        return "Difftence : {$year} Years , {$month} Months , {$day} Days . ";
    }
}
$Date1 = "1981-11-03";
$Date2 = "2013-09-04";
$Calculator = new dates($date1 , $date2);
$defference = $Calculator->Calc();
echo $defference;
?>

<!-- 5. Calculate the difference between two dates using the PHP OOP approach. 
Sample Dates : 1981-11-03, 2013-09-04
Expected Result : Difference : 31 years, 10 months, 1 days . -->
