<?php
//----------------------------------------------------
// Removing duplicate values from an array using array_unique()
//----------------------------------------------------

// Sample array with duplicates
$duplicates = [1, 2, 2, 3, 3, 3];

//----------------------------------------------------
// array_unique() removes repeated values, keeping only the first occurrence
//----------------------------------------------------
$unique = array_unique($duplicates); // $unique = [1, 2, 3]

//----------------------------------------------------
// Display the result
//----------------------------------------------------
echo "After removing duplicates: ";
print_r($unique);
echo "<br>";

//----------------------------------------------------
// Expected Output:
// After removing duplicates: Array ( [0] => 1 [1] => 2 [3] => 3 )
//----------------------------------------------------

/*
Quick notes:
- array_unique($array) = removes duplicate values from an array
- The original keys are preserved; use array_values() if you want to reindex
- print_r() = shows array contents clearly
*/
?>
