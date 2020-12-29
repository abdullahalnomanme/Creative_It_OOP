<?php

echo "===Calculator function ==="; 
echo "<br/>";

class Calculator{
    public $number_one = 40;
    public $number_two = 600;
    function __construct($dynamic_number_one,$dynamic_number_two){
        $this->number_one = $dynamic_number_one;
        $this->number_two = $dynamic_number_two;
        //Echo
        echo $this->number_one."<br/>";
        echo $this->number_two."<br/>";
        
    }

}
$obj = new Calculator(50,40);



echo "<br/>";
echo "<br/>";
echo "===Calculator function 2==="; 
echo "<br/>";
echo "<br/>";


class Calculator2{
    public $number_one = 10;
    public $number_two = 5;
    function __construct($dynamic_number_one,$dynamic_number_two ){
        $this->number_one = $dynamic_number_one;
        $this->number_two = $dynamic_number_two;
        echo $this->number_one."<br/>";
        echo $this->number_two."<br/>";
    }
    function nomanadd(){
        echo ($this->number_one +  $this->number_two)."<br/>";
    }
    function nomanasub(){
        echo ($this->number_one -  $this->number_two)."<br/>";
    }
    function nomanamulti(){
        echo ($this->number_one *  $this->number_two)."<br/>";
    }
    function nomanadivi(){
        echo ($this->number_one /  $this->number_two)."<br/>";
    }
}
$obj2 = new Calculator2(4,3);
$obj2->nomanadd();
$obj2->nomanasub();
$obj2->nomanamulti();
$obj2->nomanadivi();

echo "<br/>";
echo "<br/>";
echo "===Calculator function 3==="; 
echo "<br/>";
echo "<br/>";

class Calculator3{
    public $number_one = 400;
    public $number_two = 300;
    function __construct($dynamic_number_one, $dynamic_number_two){
        $this->number_one = $dynamic_number_one;
        $this->number_two = $dynamic_number_two;
        
    }
    function add(){
        echo ($this->number_one + $this->number_two)."<br/>";
       
    }
    function sub(){
        echo ($this->number_one - $this->number_two)."<br/>";
       
    }
    function multi(){
        echo ($this->number_one * $this->number_two)."<br/>";
       
    }
    function divi(){
        echo ($this->number_one / $this->number_two)."<br/>";
       
    }
    function result(){
        $this->add();
        $this->sub();
        $this->multi();
        $this->divi();
    }
}
$obj3 = new Calculator3(300,3);


$obj3->result();

?>