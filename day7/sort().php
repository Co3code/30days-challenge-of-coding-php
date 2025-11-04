<?php
// Sorting numbers in ascending order
// Showing how to use sort() and display the array

//----------------------------------------------------
// Our starting array
$numbers = [5, 2, 8, 1, 9]; // random numbers, not sorted

//----------------------------------------------------
// Sort it from smallest to largest
// sort() modifies the array itself
//----------------------------------------------------
sort($numbers); // after this, $numbers = [1, 2, 5, 8, 9]

//----------------------------------------------------
// Display the sorted array
// print_r() is the easiest way to see all array contents
// echo alone won’t work properly for arrays
//----------------------------------------------------
echo "Sorted ascending: ";
print_r($numbers);
echo "<br>";

//----------------------------------------------------
// Expected Output:
// Sorted ascending: Array ( [0] => 1 [1] => 2 [2] => 5 [3] => 8 [4] => 9 )
// Without print_r(): just prints "Array"
//----------------------------------------------------

/*
Quick notes:
- sort() = sorts numbers from smallest to largest
- print_r() = shows the array nicely
- echo = works for text, but not arrays
*/
