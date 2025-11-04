<?php
//----------------------------------------------------
// Checking if a value exists in an array using in_array()
//----------------------------------------------------

// Start with the merged array from before
$merged = [2, 4, 6, 1, 3, 5];

//----------------------------------------------------
// Check if 4 exists in the array
// in_array(value, array) returns true if the value is found
//----------------------------------------------------
if (in_array(4, $merged)) {
    echo "4 is in the merged array!<br>";
} else {
    echo "4 is NOT in the array.<br>";
}

//----------------------------------------------------
// Expected Output:
// 4 is in the merged array!
//----------------------------------------------------

/*
Quick notes:
- in_array(value, array) = checks if a value exists
- Returns true or false
- Useful for conditionals or validations
*/
?>
