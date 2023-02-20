<?php

    $str = "My Name Is Hitesh";
    echo $str;

    echo "<br><br>";
    # strlen()
    
    echo "str() = ".strlen($str);
    
    echo "<br><br>";
    #  str_word_count()
    
    echo "str_word_count() = ".str_word_count($str);

    echo "<br><br>";
    #  strrev()
    
    echo "strrev() = ".strrev($str);

    echo "<br><br>";
    #  strpos()
    
    echo "strpos() =".strpos($str,"Hitesh");

    echo "<br><br>";
    #  str_replace()
    
    echo "str_replace() = ".str_replace("Hitesh","Hit",$str);

    echo "<br><br>";

?>