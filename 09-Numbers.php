<?php
    #  Integer

    $a = 10;

    echo "Integer".var_dump(is_int($a));
    // var_dump(is_integer($a));
    // var_dump(is_long($a));

    echo "<br><br>";
    
    #  Float
    
    $b = 10.20;
    
    echo "Float".var_dump(is_float($b));
    // var_dump(is_double($b));

    echo "<br><br>";
    
    # Infinity
    
    $c = 2.8e20;
    
    echo "Finity".var_dump(is_finite($c))."<br>";
    echo "infinity".var_dump(is_infinite($c));

    echo "<br><br>";
    #NaN

    $d = acos(9);

    echo "NaN".var_dump(is_nan($d));

    echo "<br><br>";
    #  Numerical

    $e = 45;
    $f = "abc";

    echo "Numerical".var_dump(is_numeric($e))."<br>";
    echo "Numerical".var_dump(is_numeric($f));

    echo "<br><br>";
    #  Casting String and Float to Integer

    $g = 35.34;
    
    $cast = (int)$g;
    echo "Cast Float To Integer".$cast."<br>";
    
    $h = "45.35";

    $cast = (int)$h;
    echo "Cast String To Integer".$cast."<br>";
    ?>