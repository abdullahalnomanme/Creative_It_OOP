<?php

class Car{

    static function wheel(){
        echo "This is my wheel! <br/>";
    }
     function door(){
        echo "This is my door! <br/>";
     }
    function engine(){
        echo "This is my Engine! <br/>";
    }
}

// $obj = new Car;
// $obj->wheel();

// if you creat a static function, you don't create any object then use Class Name like "Car",
//Then use scope of resolution/double colon (::), then method name

// class_name :: method_name 
Car::wheel();
Car::door();
Car::engine();