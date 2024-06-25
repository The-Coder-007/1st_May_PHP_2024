<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MAKRS CALCULATION</title>
</head>
<body>
    
    <form action="" method="post">

    <p>Name : <input type="text" name="student_name" id="student_name" required placeholder="Enter your name" ></p>
    Math : <input type="number" name="math" id="math" min="10" max="100" required placeholder="marks" width="100%" >
    <p>Science : <input type="number" name="science" id="science" min="10" max="100" required placeholder="marks" ></p>
    <p>SS : <input type="number" name="ss" id="s" min="10" max="100" required placeholder="marks" ></p>
    <p>Sansakrit : <input type="number" name="sans" id="sans" min="10" max="100" required placeholder="marks" ></p>
    <p>Drawing : <input type="number" name="drawing" id="drawing" min="10" max="100" required placeholder="marks" ></p>
    <p><input type="submit" name="submit" id="Submit"></p>

    </form>

</body>
</html>

<?php

//Write a PHP program to enter marks of five subjects Physics, Chemistry, 
//Biology, Mathematics and Computer, calculate percentage and grade by if 
//else 

if(isset($_POST['submit'])){

    $math = $_POST['math'];
    $science = $_POST['science'];
    $ss = $_POST['ss'];
    $sans = $_POST['sans'];
    $drawing = $_POST['drawing'];

    $total_marks = $math + $science + $ss + $sans + $drawing;
    echo "<h2>  TOTAL MARKS : ". $total_marks . "</h2> <br>";

    $per = ($total_marks / 500) * 100;
    echo "<h2>  PERCENATGE : ". $per . "</h2> <br>";


    if($per >= 90){
        $grade = 'A';
    } elseif($per >= 80){
        $grade = 'B';
    } elseif($per >= 70){
        $grade = 'C';
    } elseif($per >= 60){
        $grade = 'D';
    } elseif($per >= 50){
        $grade = 'E';
    } else {
        $grade = 'F';
    }

    echo "<h2>  GRADE : ". $grade . "</h2> <br>";
    
}



