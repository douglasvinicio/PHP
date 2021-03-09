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
$filePath = "uploads/file.txt";
$output = file_get_contents($filePath);
echo $output;
$ages = explode("\n" , $output);
print_r($ages);
$totalAge = 0;
$i = 0;
foreach ($ages as $age){
    echo $age . "<br>";
    $totalAge += $age;
    $i++;
}
echo "The average is : ". ($totalAge / $i);
?>

</body>
</html>
