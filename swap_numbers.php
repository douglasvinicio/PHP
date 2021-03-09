<?php
function swapNumbers($num1 , $num2){
    echo "Before swapping: num1 = ".$num1.", num2 = ".$num2."<br>";
    $temp = $num1;
    $num1 = $num2;
    $num2 = $temp;
    return "After swapping: num1 = ".$num1.", num2 = ".$num2."<br>";
}
echo swapNumbers(1,3);
?>
