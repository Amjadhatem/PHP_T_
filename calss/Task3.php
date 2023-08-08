<?php
class Factorial{
    public $num ;
    function __construct($num){
        $this->num = $num;
    }
    function Fac(){
        $result=1;
        for($i = 1 ; $i<=$this->num; $i++){
            $result = $result * $i ;
        }
        return $result;
    }
}
$res = new Factorial(3);
echo $res->Fac();
?>