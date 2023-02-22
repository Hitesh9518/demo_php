<?php
    // validate an integer whithin a Range

    $int = 45;
    $min = 1;
    $max = 100;

    if(filter_var($int,FILTER_VALIDATE_INT,array("opration" => array("min_range" => $min , "max_range" => $max))) === false){
        echo "Variable Value is not within the llegal range.<br>";
    }else{
        echo "Variable Value is within the llegal range.<br>";
    }

    // validate ipv4 address

    $i = "127.0.0.1"; 

    if(!filter_var($i,FILTER_VALIDATE_IP,FILTER_FLAG_IPV4) === false){
        echo "Ip is valid.<br>";
    }else{
        echo "Ip is not valid.<br>";
    }

    // validate url must contain query string

    $url = "https://www.google.com";

    if(!filter_var($url,FILTER_VALIDATE_URL,FILTER_FLAG_QUERY_REQUIRED) === false){
        echo "Url is Valid.<br>";
    }else{
        echo "Url is not Valid.<br>";
    }

    // sanitize a string with ascll

    $h = "<h1>helloÆØÅ</h1>";
    $new = filter_var($h,FILTER_SANITIZE_STRING,FILTER_FLAG_STRIP_HIGH);
    echo $new."<br>";
?>