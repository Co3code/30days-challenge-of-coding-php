<?php
// Day 5: Functions and Reusable Code

// ✅ Simple function
function greetUser($name)
{
    echo "Hello, $name! Welcome to Day 5 of your PHP Challenge.<br>";
}

// ✅ Function with return value
function addNumbers($a, $b)
{
    return $a + $b;
}

// ✅ Function with default value
function multiply($x, $y = 2)
{
    return $x * $y;
}

// ✅ Using the functions
greetUser("Anthony");

$sum = addNumbers(10, 5);
echo "The sum of 10 and 5 is: $sum<br>";

$product = multiply(6);
echo "The result of 6 × 2 (default) is: $product<br>";

$product2 = multiply(6, 3);
echo "The result of 6 × 3 is: $product2<br>";
