<?php
/*
Write a  program to print the below format : 
5 9 
26 10 
37 11 
48 12 
*/

// Initialize the starting values
$a = 5;
$b = 9;

// Loop to print the pattern
for ($i = 0; $i < 4; $i++) {
    echo $a . " " . $b . "<br>";
    
    // Update the values for the next iteration
    if($a == 5) // Increment $a by 21
    {
         $a += 21;
    }else{ // Increment by 11
        $a += 11;
    }
   
    $b += 1;  // Increment $b by 1
}
