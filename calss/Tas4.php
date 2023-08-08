<?php
class sorting{
    public $arr;
    function __construct($InputArr){
        $this->array = $InputArr;
    }
    function sort_Arr(){
        sort($this->array);
    }
    function getArray(){
        return $this->array;
    }
}
$InputArr = array(11 , -2 , 4 , 35 , 0 , 8 , -9 );
$ArrSorter = new sorting($InputArr);
$ArrSorter->sort_Arr();
$ArrSorted = $ArrSorter->getArray(); 
print_r($ArrSorted);
?>


<!-- Write a PHP class that sorts an ordered integer array with the help of sort() function.
Sample array : array(11, -2, 4, 35, 0, 8, -9)
Output : Array ( [0] => -9 [1] => -2 [2] => 0 [3] => 4 [4] => 8 [5] => 11 [6] => 35 ) -->
