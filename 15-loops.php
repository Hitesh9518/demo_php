<?php

    // While Loop
    $i = 0;

    echo "While Loop <br><br>";
    
    while($i <= 50){
        echo "The Number Is : $i <br>";
        // $i++;
        $i+=5;
    }
    
    echo "<br><br>";
    // Do While Loop
    $i = 1;     //6
    
    echo "Do While Loop <br><br>";
    
    do {
        echo "The Number Is : $i <br>";
        $i++;
    } while ($i <= 5);
    
    echo "<br><br>";
    // For Loop
    
    echo "For Loop <br><br>";
    
    for ($i=1; $i < 5 ; $i++) {
        echo "The Number Is : $i <br>";
    }
    
    echo "<br><br>";
    // Foreach Loop
    
    echo "Foreach Loop <br><br>";
    $car_model = array("BMW","AUDI","VOLVO","TATA");
    
    foreach($car_model as $value){
        echo "$value <br>";
    }

    echo "<br><br>";
    // Continue

    echo "Continue <br><br>";
    
    for ($i=1; $i <=5 ; $i++) {
        if($i == 3){
            continue;
        }
        echo "The Number Is : $i <br>";
    }

    echo "<br><br>";
    // Break

    echo "Break <br><br>";
    
    for ($i=1; $i <=5 ; $i++) {
        if($i == 3){
            break;
        }
        echo "The Number Is : $i <br>";
    }
?>