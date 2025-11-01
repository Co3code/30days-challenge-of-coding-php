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

// --- Example 1: Counting from 1 to 3 ---
echo "<h3>Do While Loop: Counting from 1 to 3</h3>";

$num = 1;

do {
    echo "Number: $num <br>";
    $num++; // increment by 1
} while ($num <= 3);

// --- Example 2: Runs at least once even if condition is false ---
echo "<h3>Do While Loop: Runs At Least Once</h3>";

$num = 10;

do {
    echo "Number: $num <br>";
    $num++; // increment by 1
} while ($num <= 3);

/*
Step-by-Step Explanation for Example 2:

Step | What happens                | $num value | Condition $num <= 3 | Runs again?
--------------------------------------------------------------------------------
1    | Print "Number: 10"          | 10         | 10 <= 3 → false     |  Stop

Key point: 
Even though the condition is false from the start, the code inside the do-block
executes **once**, using the variable's initial value (10).
*/
