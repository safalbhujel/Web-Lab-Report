<!DOCTYPE html>
<html>
<head>
    <title>Lab 6 - PHP Basics</title>
    <style>
        body {
            font-family: Arial;
            margin: 20px;
        }
        .box {
            border: 1px solid black;
            padding: 10px;
            margin-top: 10px;
        }
    </style>
</head>
<body>

<h2>PHP Basics Example</h2>

<?php
// PHP syntax and variables
$name = "Safal";   // string variable
$age = 20;         // integer variable

// constant
define("COLLEGE", "TU BCA");

// operators
$sum = 10 + 5;   // arithmetic operator
$isAdult = ($age >= 18); // logical operator

echo "<div class='box'>";
echo "Name: " . $name . "<br>";
echo "Age: " . $age . "<br>";
echo "College: " . COLLEGE . "<br>";
echo "Sum of 10 + 5 = " . $sum . "<br>";
echo "</div>";

// control structure (if-else)
echo "<div class='box'>";
if($isAdult){
    echo "You are an Adult";
} else {
    echo "You are not an Adult";
}
echo "</div>";

// switch example
echo "<div class='box'>";
$day = 2;

switch($day){
    case 1:
        echo "Sunday";
        break;
    case 2:
        echo "Monday";
        break;
    default:
        echo "Other day";
}
echo "</div>";

// loop example
echo "<div class='box'>";
echo "Numbers from 1 to 5:<br>";
for($i=1; $i<=5; $i++){
    echo $i . "<br>";
}
echo "</div>";

// function
function greet($user){
    return "Hello " . $user;
}

echo "<div class='box'>";
echo greet($name);
echo "</div>";

// array
$colors = array("Red", "Green", "Blue");

echo "<div class='box'>";
echo "Colors:<br>";
foreach($colors as $c){
    echo $c . "<br>";
}
echo "</div>";
?>

</body>
</html>