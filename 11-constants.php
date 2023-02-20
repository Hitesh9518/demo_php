<?php
    #  Constants

    define("CAR","My Car No. Is 123");  // case-sensitive
    echo CAR;
    
    // define("BIKE","My Bike No. Is 321", true);  // case-insensitive
    // echo bike;

    echo "<br>";
    #  Constant Array

    define("Color",
    ['Red',
    'Blue',
    'Green']);

    echo Color[0];

    echo "<br>";
    # Constant are Global

    function MyCar(){
        echo CAR;
    }

    MyCar();
?>