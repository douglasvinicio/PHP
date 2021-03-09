<?php
if (isset($_POST["btn-submit"])){
    $file = $_FILES['myFile'];
    $name = $_FILES['myFile']['name'];
    $tmp_name = $_FILES['myFile']['tmp_name'];
    $size = $_FILES['myFile']['size'];
    $error = $_FILES['myFile']['error'];

    $tempExtension = explode('.', $name);
    $tempExtension = end($tempExtension);
    $tempExtension = strtolower($tempExtension);

    $isAllowed = array('jpg', 'jpeg', 'png', 'pdf');
    if (in_array($tempExtension, $isAllowed)){
        if ($error === 0){
            if ($size < 1000000){
                $newFileName = uniqid('', true). "." . $tempExtension;
                $fileDestination =  $_SERVER['DOCUMENT_ROOT'].$newFileName;
                move_uploaded_file($tmp_name, $fileDestination);
            }else {
                echo "File size is too big";
            }
        } else {
            echo "There was an error! Try again!";
        }
    }else{
        echo "You file extension is not accepted!";
    }
}
/*
echo $name = $_FILES['file']['name'] . "<br>";
echo $type = $_FILES['file']['type'] . "<br>";
echo $temp_location = $_FILES['file']['tmp_name'] . "<br>";
echo $temp_location = $_FILES['file']['error'] . "<br>";
*/