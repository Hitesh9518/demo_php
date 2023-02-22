<?php
    // $_SERVER

    echo $_SERVER['PHP_SELF'];
    echo "<br>";
    echo $_SERVER['SERVER_NAME'];
    echo "<br>";
    echo $_SERVER['HTTP_HOST'];
    echo "<br>";
    echo $_SERVER['HTTP_REFERER'];
    echo "<br>";
    echo $_SERVER['HTTP_USER_AGENT'];
    echo "<br>";
    echo $_SERVER['SCRIPT_NAME'];
    echo "<br>";

    ?>
<br><br>
<form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
    Name :<input type="text" name="fname">
    <input type="submit">
</form>

<?php
    // $_REQUEST & $_POST
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        // $name = $_REQUEST['fname'];
        $name = $_POST['fname'];
        if(empty($name)){
            echo "Name Is Empty";
        }else {
            echo $name;
        }
    }
?>