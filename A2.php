<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hello World!</title>
</head>
<body>
<h3>Exercise 1 : Personal Information</h3>
<?php
$x = 12;
$y = 24;
$z = ($x + $y) * 5;
echo "The value of x = $x.<br> The value of y = $y <br>";
echo "The total is ($z)";
?>
<h3>Exercise 2 : Value added tax</h3>
<?php
$price = 1500;
$vat = 15;
$totalPrice = ($price * $vat / 100) + $price;
echo "Price: $price<br> Vat: $vat% <br> Total price: $totalPrice";
?>
<h3>Exercise 3 : Average</h3>
<?php
$x = 64.148;
$y = 265.2233;
$z = 10.6488;
$average = ($x + $y + $z) / 3;
echo "The value of x = $x<br> The value of y = $y <br>The value of z = $z <br>";
print "The average is ".number_format($average, 2, '.', '');
?>
<h3>Exercise 4 : Countries and Capitals</h3>
<?php
$countries = array("Brazil is Brasilia", "Canada is Ottawa", "USA is Washington", "Australia is Camberra", "New Zealand is Wellington");
foreach ($countries as $country)
    print "The capital of ".$country."<br>";
?>
<h3>Exercise 5 : Centimeters to Inches</h3>
<?php
$cm = 15;
$cmToInch = $cm / 2.54;
print $cm." centimeters is ".number_format($cmToInch, 2, '.', '')." inches.";
?>
<h3>Exercise 6 : Expenses</h3>
<?php
$expenses = array(149.9, 254.65, 88.9, 144 , 399);
$totalAmount = 0;
$amountOfExpenses = 0;
foreach ($expenses as $expense){
    $totalAmount += $expense;
    $amountOfExpenses++;
}
print "My ".$amountOfExpenses." biggest expenses were ".$totalAmount;
?>

<h3>Exercise 7 : Weather Conditions</h3>
<?php
$weather = array("snow", "wind", "sunshine", "clouds", "rain", "hail", "sleet");
print "We've seen all kinds of weather this month.<br>
       At the beginning of the month, we had ".$weather[0]. " and " .$weather[1].".<br>
       Then came ".$weather[2]." with a few ".$weather[3]. " and some ".$weather[4].".<br>At least we didn't get any ".$weather[5]." or ".$weather[6];
?>
</body>
</html>
