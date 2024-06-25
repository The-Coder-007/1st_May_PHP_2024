<?php

//Write a PHP program to check Leap years between 1901 to 2016 Using 
//nested if. 


function isLeapYear($year) {
    if ($year % 4 == 0) {
        if ($year % 100 == 0) {
            if ($year % 400 == 0) {
                return true; // Leap year
            } else {
                return false; // Not a leap year
            }
        } else {
            return true; // Leap year
        }
    } else {
        return false; // Not a leap year
    }
}

for ($year = 1901; $year <= 2016; $year++) {
    if (isLeapYear($year)) {
        echo $year . " is a leap year.<br>";
    } else {
        echo $year . " is not a leap year.<br>";
    }
}

