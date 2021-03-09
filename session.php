<html>
<body>
<?php
//Session
// Good to use for sensitive information
// Session exists as long as the browser is open
session_start();

$_SESSION['Name'] = "John";
$_SESSION['Age'] = 56;

session_destroy();
?>

</body>
</html>
