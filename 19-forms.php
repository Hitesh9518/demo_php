<?php

$nameErr = $emailErr = $webErr = $addressErr = $genderErr ="";
$name = $email = $web = $address = $gender = "";


    if(isset($_POST['submit'])){
       
        if($_SERVER['REQUEST_METHOD'] == "POST"){

            // name
            if(empty($_POST['name'])){
                $nameErr = "Name is Required";
            }else{
                $name = $_POST['name'];
                if(!preg_match("/^[a-zA-Z-' ]*$/",$name)){
                    $nameErr = "Only letters and white space allowed";
                }
            }

            // email

            if(empty($_POST['email'])){
                $emailErr = "Email Is Required";
            }else{
                $email = $_POST['email'];
                if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    $emailErr = "Invalid Email Format";
                }
            }

            // website

            if(empty($_POST['web'])){
                $webErr = "Website Is Required";
            }else{
                $web = $_POST['web'];
                if(!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$web)){
                    $webErr = "Invalid URL";
                }
            }

            // address

            if(empty($_POST['address'])){
                $addressErr = "Address Is Required";
            }else{
                $address = $_POST['address'];
            }

            // gender

            if(empty($_POST['gender'])){
                $genderErr = "Gender Is Required";
            }else{
                $gender = $_POST['gender'];
            }
        }

        echo $name;
        echo "<br>";
        echo $email;
        echo "<br>";
        echo $web;
        echo "<br>";
        echo $address;
        echo "<br>";
        echo $gender;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        .error {color : #FF0000;}
    </style>
</head>
<body>
    <center>
        <h2>Registration Form</h2>
        <br><br>
        <form method="POST" action="">
            <table>
                <tr>
                    <td>Name :</td>
                    <td><input type="text" name="name" value="<?php echo $name?>">
                        <span class="error">* <?php echo $nameErr?></span></td>
                </tr>
                <tr>
                    <td>Email :</td>
                    <td><input type="text" name="email" value="<?php echo $email?>">
                        <span class="error">* <?php echo $emailErr?></span></td>
                </tr>
                <tr>
                    <td>Website :</td>
                    <td><input type="text" name="web" value="<?php echo $web?>">
                        <span class="error">* <?php echo $webErr?></span></td>
                </tr>
                <tr>
                    <td>Address :</td>
                    <td><textarea cols="21" rows="2" name="address" value="<?php echo $web?>"></textarea>
                        <span class="error">* <?php echo $addressErr?></span></td>
                </tr>
                <tr>
                    <td>Gender :</td>
                    <td><input type="radio" name="gender" value="Male" <?php 
                        if(isset($gender) && $gender=="Male")
                        echo "checked";
                    ?>>Male
                    <input type="radio" name="gender" value="Female"  <?php 
                        if(isset($gender) && $gender=="Female")
                        echo "checked";
                    ?>>Female
                    <span class="error">* <?php echo $genderErr?></span></td>
                </tr>
            </table>
            <input type="submit" name="submit">
        </form>
    </center>
</body>
</html>