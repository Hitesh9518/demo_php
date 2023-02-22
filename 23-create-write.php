<?php
    // $create = fopen("k.txt" , "x"); // file created
    
    // $write = fopen("k.txt" , "w"); // file Write
    
    // $text = "Good Morning \n";
    // fwrite($write,$text);
    
    // $text = "Hello";
    // fwrite($write,$text);
    
    $append = fopen("k.txt" , "a"); // file Append
    
    $text = "\n Good Afternoon \n";
    fwrite($append,$text);
    
    $text = "Hi..";
    fwrite($append,$text);

    $open = fopen("k.txt" , "r");   // file open
    echo fread($open,filesize("k.txt"));
    // fclose($write);
?>