<?php
//----------------------------------------------------
// Sorting numbers in reverse order
// Just showing how to use rsort() to get the largest numbers first
//----------------------------------------------------

// Here’s our original array
$numbers = [5, 2, 8, 1, 9]; // random numbers

//----------------------------------------------------
// Sort it from largest to smallest
// rsort() changes the array itself
//----------------------------------------------------
rsort($numbers); // after this, $numbers = [9, 8, 5, 2, 1]

//----------------------------------------------------
// Let’s see what it looks like
// print_r() is handy because echo alone won’t show arrays properly
//----------------------------------------------------
echo "Sorted descending: ";
print_r($numbers);
echo "<br>";

//----------------------------------------------------
// Expected Output:
// Sorted descending: Array ( [0] => 9 [1] => 8 [2] => 5 [3] => 2 [4] => 1 )
//----------------------------------------------------

/*
Quick notes:
- rsort() = sorts numbers from biggest to smallest
- print_r() = shows the contents of an array in a readable way
- echo = works fine for text, but not arrays
*/
?>
