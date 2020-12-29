<?php

class Calculator{

    public $a = 700;
    public $b = 500;

    function add(){
        echo "total add value : ".($this->a+$this->b)."<br/>";
    }
    function sub(){
        echo "total sub value : ".($this->a-$this->b)."<br/>";
    }
    function multi($a=3, $b=2){
        echo "total multi value : ".($a*$b)."<br/>";
    }
    function divi($a=3, $b=2){
        echo "total divi value : ".($a/$b)."<br/>";
    }
    function modal($a=3, $b=2){
        echo "total modal value : ".($a%$b)."<br/>";
    }


}

$calculator = new Calculator;

$calculator->add();
$calculator->sub();

$calculator->multi(3,2);

$calculator->divi(7,3);

$calculator->modal(15,4);
echo $calculator->a;
echo "<br/>";
echo $calculator->b;




echo "<br/>";
echo "<br/>";
// =====================================
// with Constructor 
// =====================================
echo "<br/>";
echo "<br/>";

class Calculator2{

    public $number_one = 40;
    public $number_two = 600;
    function __construct($dynamic_number_one,$dynamic_number_two){
        $this->number_one = $dynamic_number_one;
        $this->number_two = $dynamic_number_two;
        //Echo
        // echo $this->number_one."<br/>";
        // echo $this->number_two."<br/>";
        
    }
    function add(){
        echo "total add value : ".($this->number_one+$this->number_two)."<br/>";
    }
    function sub(){
        echo "total sub value : ".($this->number_one - $this->number_two)."<br/>";
    }
    function multi($a=3, $b=2){
        echo "total multi value : ".($this->number_one * $this->number_two)."<br/>";
    }
    function divi($a=3, $b=2){
        echo "total divi value : ".($this->number_one / $this->number_two)."<br/>";
    }
    function modal($a=3, $b=2){
        echo "total modal value : ".($this->number_one % $this->number_two)."<br/>";
    }


}

$calculator2 = new Calculator2(5,3);

$calculator2->add();
$calculator2->sub();

$calculator2->multi();

$calculator2->divi();

$calculator2->modal();





echo "<br/>";
echo "<br/>";
echo "<br/>";
echo "<br/>";


?>