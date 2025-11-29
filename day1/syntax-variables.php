<?php
// EXPLANATION: PHP opening tag
//  PURPOSE: Tells server "PHP code starts here!"
// USAGE: Always at beginning of PHP files

//  EXPLANATION: Variable declaration  
//  PURPOSE: Store data for reuse
// USAGE: $variable_name = value;
$student_name = "Co3code";  // Stores your name
$age = 20;                  // Stores your age
$is_learning = true;        // Stores true/false

//  EXPLANATION: echo statement
//  PURPOSE: Output content to browser  
//  USAGE: echo "text" . $variable;
echo "Hello " . $student_name . "!";
echo "<br>You are " . $age . " years old.";
echo "<br>Learning PHP: " . $is_learning;
?>