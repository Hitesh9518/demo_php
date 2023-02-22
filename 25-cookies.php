<?php
    $cookie_name = "user";
    $cookie_value = "Hit";

    setcookie($cookie_name,$cookie_value,time() + (86400 * 1), "/");    // set
    // setcookie($cookie_name,"",time() - 3600);   // delete
?>
<?php
    if(!isset($_COOKIE[$cookie_name])){      // set
        echo "Cookie is not set.<br>";
    }else {
        echo "Cookie ".$cookie_name . "is set. <br>";
        echo "Value is " .$_COOKIE[$cookie_name] ."<br>";
    }

    // echo "Cookie User Is Deleted.<br>"; // delete
?>
<?php
    // Cookie Enabled or Not

    if(count($_COOKIE) > 0 ){
        echo "Cookie Is Enabled.";
    }else{
        echo "Cookie Is Not Enabled.";
    }
?>