<?php
// Adding elements to an array using array_push()
// This adds items to the end of an existing array

//----------------------------------------------------
// Start with a sample array
$numbers = [5, 2, 8, 1, 9]; // original array

//----------------------------------------------------
// Add a new number to the end of the array
// array_push($numbers, 10) adds 10 at the end
//----------------------------------------------------
array_push($numbers, 10); // $numbers becomes [5, 2, 8, 1, 9, 10]

//----------------------------------------------------
// Display the updated array
//----------------------------------------------------
echo "After push(10): ";
print_r($numbers);
echo "<br>";

//----------------------------------------------------
// Expected Output:
// After push(10): Array ( [0] => 5 [1] => 2 [2] => 8 [3] => 1 [4] => 9 [5] => 10 )
//----------------------------------------------------

/*
Quick notes:
- array_push($array, $value) = adds one or more values to the end of an array
- print_r() = shows the full array contents
- echo = only prints strings or numbers, not arrays
*/
?>
