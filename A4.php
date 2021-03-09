<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>A4 Assignment PHP Course</title>
</head>
<body>
<h3>Exercise 1 - Vat Calculator </h3>
<?php
function calculatedPrice($price, $vat){
    return ($price * $vat / 100) + $price;
}

$price = 1500;
$vat = 15;
$calculateVat = calculatedPrice($price,$vat);
echo "Price: $price<br> Vat: $vat% <br> Total price: ".$calculateVat;
?>

<h3>Exercise 2 - Leap Year</h3>
<?php
function isLeapYear($year){
    $isLeap = false;
    if ($year % 4 == 0){
        if ($year % 100 != 0)
            $isLeap = true;
        if ($year % 400 == 0)
            $isLeap = true;
    }
    if ($isLeap == true){
        print $year." is a leap year";
    }else{
        print $year." is NOT a leap year";
    }
}
$year = 1900;
echo isLeapYear($year);
?>
<h3>Exercise 3 - Calculator </h3>
<?php

function addNumbers($num1, $num2){
    return $num1 + $num2;
}
function subtractNumbers($num1, $num2){
    return $num1 - $num2;
}
function multiplyNumbers($num1, $num2){
    return $num1 * $num2;
}
function divideNumbers($num1, $num2){
    return $num1 / $num2;
}

$num1 = 4;
$num2 = 6;

echo "Addition of ".$num1." and ".$num2." is ".addNumbers($num1,$num2)."<br>";
echo "Subtraction of ".$num1." and ".$num2." is ".subtractNumbers($num1,$num2)."<br>";
echo "Multiplicity of ".$num1." and ".$num2." is ".multiplyNumbers($num1,$num2)."<br>";
echo "Division of ".$num1." and ".$num2." is ".divideNumbers($num1,$num2)."<br>";

?>
<h3>Exercise 4 - Swapping Numbers</h3>
<?php
function swapNumbers($num1 , $num2){
    echo "Before swapping: num1 = ".$num1.", num2 = ".$num2."<br>";
    $temp = $num1;
    $num1 = $num2;
    $num2 = $temp;
    echo "After swapping: num1 = ".$num1.", num2 = ".$num2."<br>";
}

$num1 = 4;
$num2 = 8;
print swapNumbers($num1,$num2);
?>

<h3>Exercise 5 - Even or Odd</h3>
<?php
function evenOrNot($number){
    if ($number % 2 == 0){
        return $number." is even";
    }else{
        return $number." is odd";
    }
}
print evenOrNot(25);
?>

<h3>Exercise 6 - Prime Number</h3>
<?php
function isPrime($number){
    for ($i = 2; $i < $number ; $i++){
        if ($number % $i == 0 ){
                return $number." is NOT a prime number.<br>";
            }
        }
    return $number." is a prime number.<br>";
}

echo isPrime(17);
echo isPrime(18);
echo isPrime(19);
echo isPrime(20);
echo isPrime(21);
echo isPrime(22);
echo isPrime(23);
?>

</body>
</html>

