<?php
//----------------------------------------------------
// Calculating the total of array values using array_sum()
//----------------------------------------------------

// Start with the merged array
$merged = [2, 4, 6, 1, 3, 5];

//----------------------------------------------------
// array_sum() adds all values in the array
//----------------------------------------------------
echo "Sum of numbers: " . array_sum($merged) . "<br>"; // 2+4+6+1+3+5 = 21

//----------------------------------------------------
// Expected Output:
// Sum of numbers: 21
//----------------------------------------------------

/*
Quick notes:
- array_sum($array) = returns the sum of all numeric values
- Works only with numbers
- echo can directly display the result
*/
?>
