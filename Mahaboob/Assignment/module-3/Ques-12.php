<?php
// Sample array with duplicate values
$array = [1, 2, 2, 3, 4, 4, 5];

// Remove duplicates
$uniqueArray = array_unique($array);

// Output the unique array
echo "Original Array: ";
print_r($array);
echo "<br>";
echo "Array with Duplicates Removed: ";
print_r($uniqueArray);
?>
