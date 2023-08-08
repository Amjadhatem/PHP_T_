<?php
// class fruit{
//     public $name ;
//     public $color ;
    
//     function __construct($name){
//         $this->name = $name;
//     }
//     function get_name(){
//         return $this->name;
//     }
// }
// $apple = new fruit("Apple");
// echo $apple->get_name();

// --------------------------Ex2---------------------
// class fruit{
//     public $name ;
//     public $color ;
//     function __construct($name , $color){
//         $this->name = $name;
//         $this->color = $color;
//     }
//     function get_name(){
//         return $this->name;
//     }
//     function get_color(){
//         return $this->color;
//     }
// }
// $apple = new fruit("Apple","Red");
// echo $apple->get_name();
// echo"<br>";
// echo $apple->get_color();

// --------------------------/Ex2---------------------

// --------------------------Ex3---------------------

// class person{
//     public $name ;
    
//     function __construct($name){
//         $this->name = $name;
//     }
//     function greet(){
//         echo "Hello , My name is {$this->name}";
//     }
// }
// $person1 = new person("Amjad");
// $person1->greet();

// --------------------------/Ex3---------------------

// --------------------------Ex4---------------------
// class Rectangle{
//     public $length ;
//     public $width ;

//     function __construct($length , $width){
//         $this->length = $length;
//         $this->width = $width;
//     }
//     function getArea(){
//         return $this->length * $this->width;
//     }
// }
// $rectangle = new Rectangle(5 , 5);
// echo $rectangle->getArea();

// --------------------------/Ex4---------------------
// class book{
//     private $title;
//     private $author;
//     private $year;

//     function __construct($title , $author , $year = null){
//         $this->title = $title;
//         $this->author = $author;
//         $this->year = $year;
//     }
//     function getInfo(){
//         $Info = "Title : {$this->title} , Author :{$this->author} ";
//         if($this->year !== null){
//             $info .= ", Year: {$this->year}";
//         }
//         echo $Info;
//     }
//     $book1 = new book("The Great Gatsby" , "F. Scott Fitzgerald");
//     $book1->getInfo();
}
?>

