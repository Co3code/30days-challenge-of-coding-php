<?php
/*
=============================================
   PHP Do...While Loop Example
=============================================

The DO...WHILE loop will always run the code block at least once,
even if the condition is false.
---------------------------------------------
Syntax:
do {
   // code to execute
} while (condition);
---------------------------------------------
*/

// --- Example: Counting from 1 to 3 ---
echo "<h3>Do While Loop: Counting from 1 to 3</h3>";

$num = 1;

do {
  echo "Number: $num <br>";
  $num++; // increment by 1
} while ($num <= 3);

// --- Example: Proving it runs once even if false ---
echo "<h3>Do While Loop: Runs At Least Once</h3>";

$num = 10;

do {
  echo "Number: $num <br>";
  $num++;
} while ($num <= 3);
?>
