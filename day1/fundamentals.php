<?php
// VARIABLES - The building blocks
$name = "Co3code";          // String
$age = 20;                  // Integer  
$is_learning = true;        // Boolean
$score = 95.5;              // Float

// OUTPUT - Showing results
echo "Hello, " . $name . "!";
echo "<br>You are " . $age . " years old.";
echo "<br>Learning PHP: " . $is_learning;
echo "<br>Your score: " . $score;


echo "<hr><h3> VARIABLES DEEP DIVE</h3>";

//  EXPLANATION: Variable reassignment
//  PURPOSE: Change variable values anytime
//  WHEN TO USE: Updating information as program runs
$student_name = "Co3code";  // Original value
echo "Original name: " . $student_name . "<br>";

$student_name = "PHP Master";  // Changed value
echo "Updated name: " . $student_name . "<br>";

//  EXPLANATION: Variable operations
//  PURPOSE: Perform calculations with variables
//  WHEN TO USE: Math, string manipulation, logic
$number1 = 15;
$number2 = 5;
$sum = $number1 + $number2;
$difference = $number1 - $number2;
$product = $number1 * $number2;
$quotient = $number1 / $number2;

echo "<br> MATH OPERATIONS:<br>";
echo $number1 . " + " . $number2 . " = " . $sum . "<br>";
echo $number1 . " - " . $number2 . " = " . $difference . "<br>";
echo $number1 . " × " . $number2 . " = " . $product . "<br>";
echo $number1 . " ÷ " . $number2 . " = " . $quotient . "<br>";

//  EXPLANATION: String concatenation in detail
//  PURPOSE: Build dynamic text by combining strings and variables
//  WHEN TO USE: Creating messages, emails, displays
$greeting = "Hello";
$target = "World";
$message = $greeting . " " . $target . "!";
echo "<br> STRING CONCATENATION:<br>";
echo "Message: " . $message . "<br>";

//  EXPLANATION: Variable types matter!
//  PURPOSE: Different types behave differently
//  WHEN TO USE: Understanding why 1 + 1 = 2 but "1" + "1" = "11"
$string_number = "5";
$actual_number = 5;
$string_result = $string_number + $string_number;  // PHP tries to help!
$number_result = $actual_number + $actual_number;

echo "<br> VARIABLE TYPES MATTER:<br>";
echo "String '5' + String '5' = " . $string_result . "<br>";
echo "Number 5 + Number 5 = " . $number_result . "<br>";


echo "<hr><h3> VARIABLES DEEP DIVE</h3>";

//  EXPLANATION: Variable reassignment
//  PURPOSE: Change variable values anytime
// WHEN TO USE: Updating information as program runs
$student_name = "Co3code";  // Original value
echo "Original name: " . $student_name . "<br>";

$student_name = "PHP Master";  // Changed value
echo "Updated name: " . $student_name . "<br>";

//  EXPLANATION: Variable operations
//  PURPOSE: Perform calculations with variables
//  WHEN TO USE: Math, string manipulation, logic
$number1 = 15;
$number2 = 5;
$sum = $number1 + $number2;
$difference = $number1 - $number2;
$product = $number1 * $number2;
$quotient = $number1 / $number2;

echo "<br> MATH OPERATIONS:<br>";
echo $number1 . " + " . $number2 . " = " . $sum . "<br>";
echo $number1 . " - " . $number2 . " = " . $difference . "<br>";
echo $number1 . " × " . $number2 . " = " . $product . "<br>";
echo $number1 . " ÷ " . $number2 . " = " . $quotient . "<br>";

//  EXPLANATION: String concatenation in detail
//  PURPOSE: Build dynamic text by combining strings and variables
//  WHEN TO USE: Creating messages, emails, displays
$greeting = "Hello";
$target = "World";
$message = $greeting . " " . $target . "!";
echo "<br>🧵 STRING CONCATENATION:<br>";
echo "Message: " . $message . "<br>";

//  EXPLANATION: Variable types matter!
//  PURPOSE: Different types behave differently
//  WHEN TO USE: Understanding why 1 + 1 = 2 but "1" + "1" = "11"
$string_number = "5";
$actual_number = 5;
$string_result = $string_number + $string_number;  // PHP tries to help!
$number_result = $actual_number + $actual_number;

echo "<br> VARIABLE TYPES MATTER:<br>";
echo "String '5' + String '5' = " . $string_result . "<br>";
echo "Number 5 + Number 5 = " . $number_result . "<br>";
?>

?> 