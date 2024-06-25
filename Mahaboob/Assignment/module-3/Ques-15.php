<?php
// Sample integer array
$numbers = [10, 20, 30, 40, 50];

// Initialize total variable
$total = 0;

// Loop through the array to calculate the total
for ($i = 0; $i < count($numbers); $i++) {
    $total += $numbers[$i];
}

// Display the total
echo "Total sum of numbers: $total<br>";

