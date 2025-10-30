<?php
// Day 2: Variables, Constants, and Operators

// Constants: A constant is a name given to a fixed value that, once defined, cannot be changed or undefined during the entire execution of the script.
// Think of it like a permanent label for a specific piece of information. Unlike variables, constants' values stay the same until the script finishes.

// Defining constants for site name and passing score
define("SITE_NAME", "My PHP Challenge"); // This is the name of the site. It won't change throughout the script.
define("PASSING_SCORE", 75);             // This is the passing score threshold. Once defined, it remains constant.

// Outputting the values of the constants
echo SITE_NAME;                              // Output the constant for site name
echo "<br> Passing Score: " . PASSING_SCORE; // Output the constant for passing score

// =================================================================== 

// Arithmetic Operators: These operators perform mathematical operations on numbers.

// Declare two variables for arithmetic operations
$a = 10;
$b = 3;

// Performing arithmetic operations and outputting results
echo "<br> Addition: " . ($a + $b);            // Addition
echo "<br> Subtraction: " . ($a - $b);         // Subtraction
echo "<br> Multiplication: " . ($a * $b);      // Multiplication
echo "<br> Division: " . ($a / $b);            // Division
echo "<br> Modulus (Remainder): " . ($a % $b); // Modulus (remainder)

// ===================================================================
// Assignment Operators: These operators are used to assign values to variables.

// Example of assignment operation
$x = 5;
$x += 2;                                        // same as $x = $x + 2; (adds 2 to $x)
echo "<br> Value of x after assignment: " . $x; // 7

// ===================================================================
// Comparison Operators: These operators are used to compare two values.

// Declare a variable for comparison
$score = 90;

// Performing comparisons and outputting the results
echo "<br> Score is 90: " . ($score == 90);             // true
echo "<br> Score is not 50: " . ($score != 50);         // true
echo "<br> Score is greater than 80: " . ($score > 80); // true
echo "<br> Score is less than 100: " . ($score < 100);  // true

// ===================================================================
// Logical Operators: These operators are used to combine conditional statements.

// Declare a score variable for logical operations
$score = 85;

// Example of logical AND (&&) operator
if ($score >= 75 && $score <= 100) {
    echo "<br> Passed"; // Score is within passing range
}

// Example of logical OR (||) operator
if ($score < 75 || $score > 100) {
    echo "<br> Invalid score or failed"; // Score is out of valid range
}

// Example of logical NOT (!) operator
if (! $score) {
    echo "<br> Score not set"; // If $score is not set or is 0
}

// ===================================================================
// This is called a **visual separator** or **divider**.
// I used it to help **organize the code** and make it **easier to read**.
// It's not required by PHP, but it helps to visually separate different sections of the code,
// especially in longer scripts. It improves **readability** and makes it easier to
// find specific sections quickly when reviewing or editing the code.
// ===================================================================
