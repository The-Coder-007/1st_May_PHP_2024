<?php

//  Write a program to find whether a number is Armstrong or not


// Array of numbers to check for Armstrong numbers
$numbers = [153, 370, 371, 407, 1634, 8208, 9474, 123, 10];

// Sort the array
sort($numbers);

// Iterate through the sorted array and check each number
foreach ($numbers as $number) {
    $numStr = (string)$number;
    $numDigits = strlen($numStr);
    $sum = 0;

    // Calculate the sum of the digits raised to the power of the number of digits
    for ($i = 0; $i < $numDigits; $i++) {
        $digit = (int)$numStr[$i];
        $sum += pow($digit, $numDigits);
    }

    // Check if the sum is equal to the original number and print result
    if ($sum === $number) {
        echo $number . " is an Armstrong number.<br>";
    } else {
        echo $number . " is not an Armstrong number.<br>";
    }
}
?>
