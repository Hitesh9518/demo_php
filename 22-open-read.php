<?php
    $open = fopen("h.txt" , "r");
    // echo fread($open,filesize("h.txt"));
    // echo fgets($open);  // Singal Line
    // echo fgetc($open);  // singal char

    // feof()

    while(!feof($open)){
        echo fgets($open)."<br>";
    }
    fclose($open);
?>