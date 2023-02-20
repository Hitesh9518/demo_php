<?php

    // if condition
    $age = 20;

    if($age > 18){
        echo "You Are Eligible For Vote";
    }

    echo "<br><br>";
    
    // if..else condition
    $a = 10;
    $b = 20;
    
    if($a > $b){
        echo "A is Big";
    }
    else{
        echo "B is Big";
    }
    
    echo "<br><br>";
    
    // if..elseif..else
    $a = 10;

    if($a > 0){
        echo "A is Positive No.";
    }
    elseif($a < 0){
        echo "A is Negative No.";
    }
    else{
        echo "A is Zero";
    }
?>