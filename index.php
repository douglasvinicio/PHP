<html>
<head>
    <title>PHP Test</title>
</head>
<body>
<h1>This is the GET method</h1>
<p>Form information is shown in the URL</p>
<form action="display_get.php" method="get">
    <?php
    if (empty($first_name)){
        $message = 'You must enter your first name.';
    }
    ?>
    <label>First Name: </label>
    <input type="text" name="first_name" value=""/> <br>
    <label>Last Name: </label>
    <input type="text" name="last_name"/> <br>
    <label>&nbsp;</label>
    <input type="submit" value="Submit"/>
</form>
<h1>This is the POST method</h1>
<p>Form information is NOT shown in the URL</p>
<form action="display_post.php" method="post">
    <label>First Name: </label>
    <input type="text" name="first_name"/> <br>
    <label>Last Name: </label>
    <input type="text" name="last_name"/> <br>
    <label>&nbsp;</label>
    <input type="submit" value="Submit"/>
</form>
<h2> Show Dates </h2>
<h3>date('y-m-d') -> <?php echo date('y-m-d'); ?></h3>
<h3>date('m/d/y') -> <?php echo date('m/d/y') ?></h3>
<h3>date('m.d.y') -> <?php echo date('m.d.y') ?></h3>
<h3>date('Y') -> <?php echo date('Y') ?></h3>
<a href="php_info.php">PHP Info</a>
<br>
<a href="hello_world.php">Hello World!</a>
<br>
<a href="date_time.php">Date and Time Class</a>
<br>
<a href="A2.php">Assignment A2 </a>
<br>
<a href="A3.php">Assignment A3 </a>
<br>
<a href="A4.php">Assignment A4 </a>
<br>
<a href="A4.php">Session  </a>
</body>
</html>