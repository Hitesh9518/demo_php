<?php

        
        if(isset($_POST["submit"])) {

            $target_dir = "upload/";
            $target_file = $target_dir . basename($_FILES['fileToUpload']['name']);
            $uploadOk = 1;
            $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

            // Check if image file is a actual image or fake image
            $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
            if($check !== false) {
                echo "File is an image - " . $check["mime"] . ".<br>";
                $uploadOk = 1;
            } else {
                echo "File is not an image.<br>";
                $uploadOk = 0;
            }

            // Check file already exists
            if(file_exists($target_file)){
                echo "Sorry ,file already exists.<br>";
                $uploadOk = 0;
            }
            
            // Check File Size
            if($_FILES['fileToUpload']['size'] > 1000){
                echo "Sorry ,Your File is too large.<br>";
                $uploadOk = 0;
            }

            // Allow File Formats
            if($imageFileType !="jpg" && $imageFileType !="jpeg"){
                echo "Sorry ,only JPG and JPEG files are allowed.<br>";
            }

            // file upload
            if($uploadOk == 0){
                echo "Sorry ,your file was not uploaded.<br>";
            }
            else {
                if(move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $target_file)) {
                    echo "The File Has Been Uploaded.<br>";
                }
                else {
                    echo "Sorry ,There was an erorr uploading your file.<br>";
                }
            }
        }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form method="POST" enctype="multipart/form-data">
        Select Image To Upload :
        <input type="file" name="fileToUpload" id="fileToUpload">
        <input type="submit" value="upload To Image" name="submit">
    </form>
</body>
</html>