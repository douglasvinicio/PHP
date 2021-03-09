<html>
<body>
<?php
if (isset($_POST)){
    if (!empty($_POST['name']))
        echo $_POST['name']." your form is submitted.";
    echo "<br>";
    print_r($_POST);
}
?>
<form action="get.php" method="get">
    <input type="text" name="name">
    <input type="text" name="age">
    <button type="submit">SUBMIT</button>
</form>
</body>
</html>
