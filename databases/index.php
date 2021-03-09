<!DOCTYPE html>
<?php
require_once './includes/database.php';
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Upload Files</title>
</head>
<body>
<?php
$sql = "SELECT * FROM users";
$result = mysqli_query($conn, $sql);
$rowCount = mysqli_num_rows($result);

if ($rowCount > 0){
    while ($row = mysqli_fetch_assoc($result)){
        echo $row['username'] . "<br>";
    }
} else {
    echo "No results found!";
}
?>
</body>
</html>
