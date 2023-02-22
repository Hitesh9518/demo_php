<?php
    // filter_list

    // foreach(filter_list() as $id => $filter){
    //     echo $filter ."=". filter_id($filter)."<br>";
    // }

    // filter_var()

    // sanitize a string

    $h = "<h1>hello</h1>";
    $new = filter_var($h,FILTER_SANITIZE_STRING);
    echo $new."<br>";

    // validate an integer

    $k = 0;

    if(filter_var($k,FILTER_VALIDATE_INT) === 0 || !filter_var($k,FILTER_VALIDATE_INT) === false){
        echo "Integer is Valid.<br>";
    }else{
        echo "Integer is not Valid.<br>";
    }

    //  validate an ip

    $i = "127.0.0.1"; 

    if(!filter_var($i,FILTER_VALIDATE_IP) === false){
        echo "Ip is valid.<br>";
    }else{
        echo "Ip is not valid.<br>";
    }

    // sanitize and validate an Email Address
    
    $email = "abc@mail.com";
    
    $email = filter_var($email,FILTER_SANITIZE_EMAIL);
    
    if(!filter_var($email,FILTER_VALIDATE_EMAIL) === false){
        echo "Email is Valid.<br>";
    }else{
        echo "Email is not Valid.<br>";
    }
    
    // sanitize and validate an Url
    
    $url = "https://www.google.com/";
    
    $url = filter_var($url,FILTER_SANITIZE_URL);
    
    if(!filter_var($url,FILTER_VALIDATE_URL) === false){
        echo "Url is Valid.<br>";
    }else{
        echo "Url is not Valid.<br>";
    }
    
?>