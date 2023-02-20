<?php 
    //Global Variable
    $b = 10;
    $c = 15;
    $d ="";
    $name = "Hit";
    
    function GlobalVar(){
        global $name;
        echo "My Name is ".$name."<br>";
    }
    
    function LocalVar(){
        $a = 5; //Local Variable
        echo "Value is A ".$a."<br>";
    }

    function GlobalArrVar(){
        //use Global Variable With Array[] 
        $GLOBALS['d'] = $GLOBALS['b'] * $GLOBALS['c'];
    }

    function StaticVar(){
        static $h = 2;  //Static Variable
        echo "Value Is H $h";
        $h++;
    }
    
    GlobalVar();
    echo "My Name is ".$name."<br>";

    echo "<br>";
    
    LocalVar();
    echo "Value is A ".$a."<br>";
    
    echo "<br>";
    
    GlobalArrVar();
    echo $d;
    echo "<br>";
    
    # Static Variable Increment
    
    StaticVar();
    echo "<br>";
    StaticVar();
    echo "<br>";
    StaticVar();
    ?>