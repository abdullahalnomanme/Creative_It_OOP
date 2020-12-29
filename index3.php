<?php


// Parent Claas Elements
// body 
// wheel
// door 
// engine

// Child Claas Elements
//Sunroof

// Parent Claas Start
class Car{
    public $default_val = (50)."<br/>"; 
    private $red = "Red <br/>";
    protected $green = "Green <br/>";
    function wheel(){
        echo "This is my Wheel!! <br/>";
    }
    function door(){
        echo "This is my Door! <br/>";
    }
    function engine(){
        echo "This is my Engine! <br/>";
    }
}
// Parent Claas end
$obj = new Car;
// $obj->wheel();
// $obj->door();
// $obj->engine();



echo "<br/>";
echo "<br/>";
echo "<br/>";

// Child Class Start

class NomanMotors extends Car{
    public $default_val = (150)."<br/>";
   
    function Sunroof(){
        echo "This Car Company it have a Sunroof features!<br/>";
    }
    function wheel(){
        echo "This is my light red wheel!<br/>";
    }
    function which_color(){
        echo $this->red;
    }
    function which_color2(){
        echo $this->green;
    }
}

$obj2 = new NomanMotors;

  
$obj2->wheel();   
$obj2->door();   
$obj2->engine();   
$obj2->Sunroof();   
$obj2->which_color();   
$obj2->which_color2();   
echo $obj2->default_val;   
// Child Class End



?>