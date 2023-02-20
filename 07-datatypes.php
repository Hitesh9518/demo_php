<?php
    #String

    echo 'Hello <br>';
    echo "How Are You";

    echo "<br><br>";

    #Integer
    
    $a = 10;
    
    echo "Check Variable Data type ".var_dump($a);
    echo "<br><br>";
    
    #Float
    
    $b = 10.5;
    
    echo "Check Variable Data type ".var_dump($b);
    echo "<br><br>";
    
    #Boolean
    
    $c = true;
    $d = false;
    
    
    echo "Check Variable C Data type ".var_dump($c)."<br>";
    echo "Check Variable D Data type ".var_dump($d);
    echo "<br><br>";
    
    #Array
    
    $colors = array("Red","Blue","Green");
    
    var_dump($colors);
    echo "<br><br>";
    
    #Object
    
    class Bike {
        public $color;
        public $model;
        public function __construct($color,$model) {
            $this -> color = $color; 
            $this -> model = $model; 
        }
        public function message(){
            return "My Bike Is a " . $this->color . " " . $this->model . " ! ";
        } 
    }
    
    $MyBike = new Bike("Black","Bmw450");
    echo $MyBike -> message();
    
    echo "<br>";
    
    $MyBike = new Bike("Red","Ninja H2");
    echo $MyBike -> message();

    echo "<br><br>";

    #Null

    $e = "Hello";
    $e = NULL;

    var_dump($e);
    ?>