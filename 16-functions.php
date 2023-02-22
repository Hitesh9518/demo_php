<?php
    declare(strict_types=1);
    // normal function

    function normal_fun(){
        echo "Hello";
    }

    normal_fun();

    echo "<br>";
    // arguments functions
    
    function arg_fun($name){
        echo "Your Name Is $name";
    }
    
    arg_fun("Hitesh");
    
    echo "<br>";
    // STRICT
    
    function sum(int $h , int $k){
        return $h + $k;
    }
    
    echo sum(10,5);

    echo "<br>";
    // default argument value 
    
    function dav_fun(int $no=5){
        echo "The Number Is $no .<br>";
    }
    
    dav_fun(35);
    dav_fun();

    echo "<br>";
    // returning value
    
    function rv_fun(int $a,int $b){
        $c = $a + $b;
        return $c;
    }
    
    echo "10 + 20 = ".rv_fun(10,20) ."<br>";
    echo "100 + 20 = ".rv_fun(100,20) ."<br>";

    echo "<br>";
    // return type 

    function rt_fun(float $h,float $k) : int {    //float
        return (int) ($h - $k);     // if you use type int
        // return $h - $k;
    }

    echo rt_fun(5.6,4.4);
    echo "<br>";

    // Passing Arguments by Reference

    function add_six(&$value) {
        $value +=6;
    }

    $no = 4;
    add_six($no);
    echo $no;
?>