<?php
// 1 - Parameters to connect to a database
$dbHost = 'localhost';
$dbUser = 'root';
$dbPass = '';
$dbName = 'phpcourse';

// 2 - Database connection
$conn = mysqli_connect($dbHost,$dbUser,$dbPass,$dbName);

// 3 - Failure checking
if ($conn){

} else {
    die("Database connection failed!");
}

?>