<?php
// Sample array
$array = ['apple', 'banana', 'cherry', 'date', 'elderberry'];

// Get a single random key
$randomKey = array_rand($array);
$randomValue = $array[$randomKey];

echo "Random Value: $randomValue <br>";