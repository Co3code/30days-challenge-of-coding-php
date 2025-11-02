<?php
// ===============================
// Function Basics: multiply
// ===============================

// -------------------------------
// 1. Simple Function Definition with Default Parameter
// -------------------------------
// Define a function named 'multiply' with two parameters: $x (required) and $y (optional, default 2)
function multiply($x, $y = 2)
{
    // Multiply $x by $y and return the result
    return $x * $y;
}

/* Explanation:
- $x → required parameter, must be provided → must give a number. 
- $y = 2 →  optional number, if not given use 2
- return $x * $y → multiplies the two numbers and returns the result.
*/

// Using both parameters / using  both numbers
echo multiply(5, 3) . "<br>"; // Output: 15 (5*3)

// Using only the first number (second number uses default 2)
echo multiply(7) . "<br>"; // Output: 14 (7*2)

// -------------------------------
// 2. Function With Type Hints (PHP 7+)
// -------------------------------
function multiplyTyped(int $x, int $y = 2): int
{
    return $x * $y;
}

/* Explanation:
- int $x, int $y → parameters must be integers // number must be integer
- : int → the function must return an integer
- This makes code safer, especially for bigger programs
*/
 
echo multiplyTyped(5, 3) . "<br>"; // Output: 15
echo multiplyTyped(7) . "<br>";    // Output: 14

// -------------------------------
// 3. Notes / Safe Practices
// -------------------------------
// - Default numbers make the function easier to use
// - Type hints stop wrong types of input, reduce errors
// - Without type hints, PHP may try to convert text to numbers, but this can cause warnings