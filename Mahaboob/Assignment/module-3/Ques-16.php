<?php
// Declare a multidimensional array of floats
$balances = [
    [1.1, 2.2, 3.3, 4.4, 5.5],
    [6.6, 7.7, 8.8, 9.9, 10.0],
    [11.1, 12.2, 13.3, 14.4, 15.5]
];

// Printing the multidimensional array
echo "Multidimensional Array (balances):<br>";
foreach ($balances as $row) {
    foreach ($row as $value) {
        echo "$value "."<->";
    }
    echo "<br>";
}

