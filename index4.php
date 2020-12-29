<?php

// Parent Claas Start
abstract class Car{
    public $default_val = (50)."<br/>"; 
    private $red = "Red <br/>";
    protected $green = "Green <br/>";

    abstract function wheel();
    abstract function door();
    function engine(){
        echo "This is my Engine! <br/>";
    }
}
// Parent Claas end


// Child Class Start
class NomanMotors extends Car{
    function wheel(){
        echo "This is noman motors wheel <br/>";
    }

    function door(){
        echo "This is noman motors door <br/>";
    }
}

$obj2 = new NomanMotors;
$obj2->wheel();
$obj2->door();
// Child Class End
?>