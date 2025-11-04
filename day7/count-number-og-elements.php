<?php
//----------------------------------------------------
// Day 7 - PHP Challenge
// Topic: Counting elements in an array using count()
// Goal: Learn how to use count() and the concatenation operator (.)
//----------------------------------------------------

//  Step 1: Create a sample array of numbers
$numbers = [5, 2, 8, 1, 9]; // This array contains 5 elements

//----------------------------------------------------
//  Step 2: Use count() to find how many elements are in the array
// count($numbers) will return 5 because there are 5 elements in the array
//----------------------------------------------------

//  Step 3: Use the dot (.) operator to concatenate (join) strings
// Here, we join the text "Total numbers: " with the result of count($numbers)
echo "Total numbers: " . count($numbers) . "<br>";

// 💡 Note: Use count() whenever you need to know how many elements are in an array

//----------------------------------------------------
//  Expected Output:
// Total numbers: 5
//----------------------------------------------------
?>
