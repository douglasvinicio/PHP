<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<p>First name: <?php echo $first_name = $_GET['first_name']; ?></p>
<p>Last name: <?php echo htmlspecialchars($last_name = $_GET['last_name']); ?></p>
</body>
</html>