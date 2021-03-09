<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Upload Files</title>
</head>
<body>
<?php
if (isset($_POST['submit'])){
    $myFile = fopen("./uploads/file.txt", "w"); // mode can be switched to a ( append)

    $txt = "My age is ".$_POST['age']. "\n";
    fwrite($myFile, $txt);
    fclose($myFile);
}
?>
<form action="index.php" method="post" enctype="multipart/form-data">
    <input type="txt" name="age">
    <button type="submit" name="btn-submit">Submit</button>
</form>
</body>
</html>
