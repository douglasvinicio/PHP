<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<p>First name: <?php echo $first_name = $_POST['first_name']; ?></p>
<p>Last name: <?php echo htmlspecialchars($last_name = $_POST['last_name']); ?></p>

<p> ++  /  $counter++  / adds 1 to counter</p>
<p> ++  /  $counter--  / subtracts 1 from counter</p>
<p> %  /  13 % 4  / 1</p>
<p> /  /  13 / 4  / 3.25</p>

</body>
</html>
