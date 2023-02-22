<?php
    // json encode

    $roll_no = array("khushi" =>3,"jaynish" => 5);
    echo json_encode($roll_no)."<br>";
    
    $color = array("red","black");
    echo json_encode($color)."<br>";

    // json decode

    $obj  = '{"khushi":3,"jaynish":5}';
    var_dump(json_decode($obj));
    
    echo "<br>";
    
    $obj  = '{"khushi":3,"jaynish":5}';
    var_dump(json_decode($obj,true));
    
    echo "<br>";
    
    // accessing the decode values
    
    $jsonobj  = '{"khushi":3,"jaynish":5}';
    $obj =(json_decode($jsonobj));
    
    echo $obj -> khushi;
    echo $obj -> jaynish;
    
    echo "<br>";
    
    $jsonobj  = '{"khushi":34,"jaynish":5}';
    $arr =(json_decode($jsonobj,true));
    
    echo $arr["khushi"];
    echo $arr["jaynish"];
    
    echo "<br>";
    
    // Looping through the value 
    
    $jsonobj  = '{"khushi":3,"jaynish":5}';
    $obj =(json_decode($jsonobj));
    
    foreach($obj as $key => $value){
        echo $key . "=>" . $value . "<br>";
    }
    echo "<br>";

    $jsonobj  = '{"khushi":35,"jaynish":5}';
    $arr =(json_decode($jsonobj,true));

    foreach($arr as $key => $value){
        echo $key . "=>" . $value . "<br>";
    }
    ?>