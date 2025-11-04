<?php
//----------------------------------------------------
// Combining arrays using array_merge()
//----------------------------------------------------

// Two sample arrays
$even = [2, 4, 6]; // even numbers
$odd  = [1, 3, 5]; // odd numbers

//----------------------------------------------------
// Merge the two arrays into one
// array_merge() combines all elements from both arrays
//----------------------------------------------------
$merged = array_merge($even, $odd);
// $merged = [2, 4, 6, 1, 3, 5]

// You can also merge with additional values like this:
$merged_with_extra = array_merge($even, $odd, [10, 20]);
// $merged_with_extra = [2, 4, 6, 1, 3, 5, 10, 20]

// Note: array_merge_recursive() is different — it merges **nested arrays** recursively.

//----------------------------------------------------
// Display the merged arrays
//----------------------------------------------------
echo "Merged array: ";
print_r($merged);
echo "<br>";

echo "Merged with extra values: ";
print_r($merged_with_extra);
echo "<br>";

//----------------------------------------------------
// Expected Output:
// Merged array: Array ( [0] => 2 [1] => 4 [2] => 6 [3] => 1 [4] => 3 [5] => 5 )
// Merged with extra values: Array ( [0] => 2 [1] => 4 [2] => 6 [3] => 1 [4] => 3 [5] => 5 [6] => 10 [7] => 20 )
//----------------------------------------------------

/*
Quick notes:
- array_merge($array1, $array2, ...) = joins arrays end-to-end
- Numeric keys are reindexed in the resulting array
- print_r() = displays the full array contents
- array_merge_recursive() = merges arrays recursively, combining values into sub-arrays if keys match
*/
