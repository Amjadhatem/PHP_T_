<?php
class display{
    public $name ;
    function __construct($name){
        $this->name = $name ;
    }
    function getName(){
        echo "Hello All , I am {$this->name}";
    }
}
$name1 = new display("Amjad");
$name1->getName();
?>