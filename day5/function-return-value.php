<?php
// ===============================
// Function Basics: addNumbers
// ===============================

// -------------------------------
// 1. Simple Function
// -------------------------------
// Function name: addNumbers
// $a and $b → numbers to add
function addNumbers($a, $b)
{
    return $a + $b; // adds the two numbers and gives back the answer
}

// Using the function
$sum = addNumbers(5, 7);
echo "The sum is: $sum<br>"; // Output: The sum is: 12

// Using function directly in echo
echo "10 + 15 = " . addNumbers(10, 15) . "<br>"; // Output: 10 + 15 = 25

// -------------------------------
// 2. Notes / Safe Practices
// -------------------------------
// - Only works well with numbers. Non-number text like "abc" may give warnings.
// - You can store the result in a variable or use it directly in echo.
// - For bigger projects, using type hints makes code safer.

// -------------------------------
// 3. Function With Type Hints (PHP 7+)
// -------------------------------
// Makes sure inputs and output are integers (whole numbers)
function addNumbersTyped(int $a, int $b): int
{
    return $a + $b;
}

// Using typed function
echo addNumbersTyped(5, 7) . "<br>";       // Output: 12
echo addNumbersTyped("10", "15") . "<br>"; // Output: 25 (PHP converts numeric text)
// echo addNumbersTyped("hello", 5) . "<br>"; // ERROR in strict mode

// -------------------------------
// 4. Function Without Type Hints
// -------------------------------
function addNumbersNoHint($a, $b)
{
    return $a + $b;
}

// Works with numbers and numeric text
echo addNumbersNoHint(5, 7) . "<br>";       // Output: 12
echo addNumbersNoHint("10", "15") . "<br>"; // Output: 25

// Non-numeric text treated as 0
echo addNumbersNoHint("hello", 5) . "<br>"; // Output: 5
