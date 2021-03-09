<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>A3 Assignment PHP Course</title>
</head>
<body>
<h3>Exercise 1 </h3>
<?php
$x = 300;
$y = 150;
if ($x < $y){
    print "Highest value is $y <br> Lowest value is $x";
}else{
    print "Highest value is $x <br> Lowest value is $y";
}
?>
<h3>Exercise 2 </h3>
<?php
$suit = 1;
if ($suit > 0 && $suit <5){
    if ($suit == 1)
        print "Spades";
    if ($suit == 2)
        print "Hearts";
    if ($suit == 3)
        print "Diamonds";
    if ($suit == 4)
        print "Clubs";
}else{
    echo "Error! Number must be between 1 and 4";
}
?>
<h3>Exercise 3 </h3>
<?php
$totalPoints = 55;
$grade = "";

if ($totalPoints >= 90 && $totalPoints<= 100)
    $grade = "A";
if ($totalPoints >= 80 && $totalPoints<= 89)
    $grade = "B";
if ($totalPoints >= 70 && $totalPoints<= 79)
    $grade = "C";
if ($totalPoints >= 60 && $totalPoints<= 69)
    $grade = "D";
if ($totalPoints < 60)
    $grade = "F";

if ($grade === "A" | $grade === "B" | $grade === "C")
    print "You got a *".$grade."* <br>You scored the total of ".$totalPoints."<br>Congratulations! You passed!";
else
    print "You got a *".$grade."* <br>You scored the total of ".$totalPoints."<br>Unfortunately you did NOT pass!";

?>
<h3>Exercise 4 </h3>
<?php
$machineWorkedHours = 10001;
$machineAge = 6;
$machineFailsPerYear = 23;
$toBeReplaced = false;
if ($machineWorkedHours > 10000 | $machineAge > 7 | $machineFailsPerYear > 25)
    echo var_export($toBeReplaced = true);
else
    echo var_export($toBeReplaced);
?>
<h3>Exercise 5 </h3>

<?php
$year = 1900;
$isLeap = false;
if ($year % 4 == 0){
    if ($year % 100 != 0)
        $isLeap = true;
    if ($year % 400 == 0)
        $isLeap = true;
}
print "Is the year of ".$year." a leap year? <br>Answer: ";
echo var_export($isLeap);
?>
<h3>Exercise 6 </h3>

<?php
$num = 2;

for ($counter = 1; $counter <= 10; $counter++){
    print " - ".$num." * ".$counter." = ".($counter * $num)."<br>";
}
?>

<h3>Exercise 7</h3>
<?php
$f1 = 0;
$f2 = 1;
for ($counter = 1; $counter <= 50; $counter++){
    $fibonacci = $f1 + $f2;
    print $counter." -> ".$fibonacci."<br>";
    $f1 = $f2;
    $f2 = $fibonacci;
}
?>
</body>
</html>

