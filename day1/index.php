<?php

$name = "anthony";
$age = 21;
$score = 95.5;
$studentStatus = true;


echo  "<h1>Welcome to My PHP Challenge!</h1>";
echo "<p> Name:  $name</p> ";
echo "<p> age:  $age</p> ";
echo "<p> score:  $score</p> ";

// i use ternary operator( ?: )to check if $studentStatusis true or false 
// If $studentStatus is true, show "Yes", otherwise show "No"

echo "<p>Student" . ($studentStatus ?  "Yes" :  "No") . "</p>";                       
