<?php
    session_start();

    $_SESSION['username'] = "Hit";
    echo "Session variable are set.<br>";
    
    // $_SESSION['username'] = "Hitesh";
    echo "User Name is " .$_SESSION['username'].".<br>";
    // print_r($_SESSION);
    
    // all session variables remove
    // session_unset();
    // print_r($_SESSION);
    
    // destroy the session
    // session_destroy();
    // print_r($_SESSION);
    ?>