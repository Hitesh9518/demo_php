<?php
    // indexed array

    $color = array("red","green","blue");
    // echo "I like ". $color[0] .",". $color[1] .",". $color[2] . ".";

    foreach ($color as $value){
        echo "$value <br>";
    }

    echo "<br>";
    
    // Associative Array
    
    $roll_no = array("Hitesh"=>"58","Jaynish"=>"59","Khushi"=>"60");
    
    // echo "Jaynish Roll No Is ". $roll_no['Jaynish'] ."<br>";
    
    foreach($roll_no as $a => $value){
        echo "Key=". $a .";Value=" . $value;
        echo "<br>";
    }

    echo "<br>";
    // Multidimensional Arrays
    
    $stud = array(
        array("Hitesh","21"),
        array("Khushi","20"),
        array("Jaynish","20"),
        
    );

    // echo "Name Is ". $stud[0][0] ." and Age Is ". $stud[0][1] .".<br>";
    // echo "Name Is ". $stud[1][0] ." and Age Is ". $stud[1][1] .".<br>";
    // echo "Name Is ". $stud[2][0] ." and Age Is ". $stud[1][1] .".";
    
    for ($row = 0; $row < 3; $row++) {
        echo "<p><b>Row number $row</b></p>";
        echo "<ul>";
        for ($col = 0; $col < 2; $col++) {
          echo "<li>".$stud[$row][$col]."</li>";
        }
        echo "</ul>";
    }

    echo "<br>";
    // sorting
    
    $no = array(2,5,7,9,4);
    // sort($no);
    rsort($no);
    
    foreach($no as $value){
        echo "$value <br>";
    }

    echo "<br>";
    // asort and ksort

    $roll_no = array("Hitesh"=>"58","Jaynish"=>"59","Khushi"=>"60");
    // asort($roll_no);
    ksort($roll_no);
    // echo "Jaynish Roll No Is ". $roll_no['Jaynish'] ."<br>";
    
    foreach($roll_no as $a => $value){
        echo "Key=". $a .";Value=" . $value;
        echo "<br>";
    }

    echo "<br>";
    // arsort and krsort

    $roll_no = array("Hitesh"=>"58","Jaynish"=>"59","Khushi"=>"60");
    // arsort($roll_no);
    krsort($roll_no);
    // echo "Jaynish Roll No Is ". $roll_no['Jaynish'] ."<br>";
    
    foreach($roll_no as $a => $value){
        echo "Key=". $a .";Value=" . $value;
        echo "<br>";
    }
?>