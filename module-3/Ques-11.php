1. Declaring Arrays in PHP<br>
Indexed Array:<br>
An indexed array uses numeric keys to access values.<br>


$indexedArray = array('apple', 'banana', 'cherry');
<br>
Or using short array syntax (PHP 5.4+):<br>

$indexedArray = ['apple', 'banana', 'cherry'];<br>
Associative Array:<br>
An associative array uses named keys (strings) to access values.<br>


$assocArray = array('name' => 'John', 'age' => 30, 'city' => 'New York');<br>
Or with short array syntax:<br>

$assocArray = ['name' => 'John', 'age' => 30, 'city' => 'New York'];<br>
Mixed Type Array:<br>
PHP allows arrays to have elements of different types:<br>

$mixedArray = array(10, 'apple', true, 3.14, ['a', 'b', 'c']);<br>
Or using short array syntax:<br>

<br>
$mixedArray = [10, 'apple', true, 3.14, ['a', 'b', 'c']];<br>
2. Converting JSON String to Array in PHP<br>
PHP provides built-in functions to convert JSON strings to arrays (json_decode()) and arrays to JSON strings (json_encode()).<br>
$jsonString = '{"name":"John","age":30,"city":"New York"}';<br>

// Convert JSON string to associative array<br>
$arrayFromJson = json_decode($jsonString, true);<br>
<?php
echo "Example:";

$jsonString = '{"name":"John","age":30,"city":"New York"}';

// Convert JSON string to associative array
$arrayFromJson = json_decode($jsonString, true);

// Access elements of the array
echo "<br>".$arrayFromJson['name']."<br>";  // Outputs: John
echo $arrayFromJson['age']."<br>";   // Outputs: 30
echo $arrayFromJson['city']."<br>";  // Outputs: New York