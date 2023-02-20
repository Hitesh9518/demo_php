<?php
    $a = 10;
    $b = 2;

    echo "Value of A = $a and B = $b";
    echo "<br><br>";

    //  Arithmetic operators

    echo "Sum of A + B = ".$a + $b."<br>";
    echo "Sub of A - B = ".$a - $b."<br>";
    echo "Mul of A * B = ".$a * $b."<br>";
    echo "Div of A / B = ".$a / $b."<br>";
    echo "Mod of A % B = ".$a % $b."<br>";
    echo "Expo of A ** B = ".$a ** $b."<br>";

    echo "<br><br>";

    //  Assignment operators

    echo $a = $b;
    echo "<br>";
    echo $a =$a + $b;
    echo "<br>";
    echo $a =$a - $b;
    echo "<br>";
    echo $a =$a * $b;
    echo "<br>";
    echo $a =$a / $b;
    echo "<br>";
    echo $a =$a % $b;

    echo "<br><br>";

    //  Comparison operators

    $c = 100;
    $d ="100";

    echo "Value of C = $c and D = $d";
    echo "<br><br>";

    echo "c == d".var_dump($c == $d)."<br>";
    echo "c === d".var_dump($c === $d)."<br>";
    echo "c != d".var_dump($c != $d)."<br>";
    echo "c <> d".var_dump($c <> $d)."<br>";
    echo "c !== d".var_dump($c !== $d)."<br><br>";
    
    $e = 100;
    $f = 30;

    echo "Value of E = $e and F = $f";
    echo "<br><br>";
    
    echo "e > f".var_dump($e > $f)."<br>";
    echo "e < f".var_dump($e < $f)."<br>";
    echo "e >= f".var_dump($e >= $f)."<br>"; 
    echo "e <= f".var_dump($e <= $f)."<br>"; 
    echo "e <=> f".var_dump($e <=> $f)."<br>"; 

    echo "<br><br>";
    //  Increment/Decrement operators
    
    $g = 20;
    echo "Value of G = $g <br>";
    
    echo "g++ = ".$g++."<br>";
    echo "g-- = ".$g--."<br>";
    echo "++g = ".++$g."<br>";
    echo "--g = ".--$g."<br>";

    echo "<br><br>";
    //  Logical operators
    
    $e = 100;
    $f = 30;

    if($e == 100 and $f == 30){
        echo "and <br>";
    }
    
    if($e == 10 or $f == 30){
        echo "or <br>   ";
    }
    
    if($e == 100 xor $f == 40){
        echo "xor <br>   ";
    }
    
    if($e == 100 && $f == 30){
        echo "&& <br>";
    }
    
    if($e == 10 || $f == 30){
        echo "or <br>   ";
    }
    
    if($e !== 10 ){
        echo "not <br>   ";
    }
    
    echo "<br><br>";
    //  String Operators
    
    $fname = "Hitesh";
    $lname = " Patel";
    
    echo $fname.$lname; // Concatenation
    echo "<br>";
    
    $fname .= $lname;   // Concatenation assignment
    echo $fname;
    
    echo "<br><br>";
    //  Array Operators
    
    $a1 = array("a" => 1,"b" => 2);
    $a2 = array("c" => 3,"d" => 4);
    
    print_r($a1 + $a2);
    echo "<br>";
    var_dump($a1 == $a2);
    echo "<br>";
    var_dump($a1 === $a2);
    echo "<br>";
    var_dump($a1 != $a2);
    echo "<br>";
    var_dump($a1 <> $a2);
    echo "<br>";
    var_dump($a1 !== $a2);
    
    ?>