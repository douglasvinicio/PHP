<?php

try{

    $dsn = 'mysql:host=localhost;dbname=my_database';
    $username = 'user';
    $password = '12345678';

    $db = new PDO($dsn, $username, $password);

    echo '<p> You are connected to the database!</p>';

}catch (PDOException $e){
    $error_message = $e->getMessage();
    echo "<p>An error occured while connecting to the database: $error_message </p>";
}

// How to handle any type of exception
try {
    // Statements that might throw an exception
} catch (Exception $exc){
    $error_message_general = $exc->getMessage();
    echo "<p>Error message : $error_message_general</p>";
}

// The syntax for executing a method of any object
//$objectName-> methodName(argumentList);

// A method of the PDO class for preparing a SQL statement
//prepare($select_statement)

// Two methods of the PDOStatement class for executing a statement
//bindValue($param, value)
//execute()

$query = 'SELECT * FROM products';
$statement = $db->prepare($query);
$statement->execute();

$category_id = "";
//How to execute a SQL statement that has a parameter
$queryParam = 'SELECT * FROM products WHERE categoryID = :categoryID';
$statement = $db->prepare($queryParam);
$statement-> bindValue(':category_id', $category_id);
$statement->execute();


// Two more methods of the PDOStatement class
fetch();
closeCursor();

//