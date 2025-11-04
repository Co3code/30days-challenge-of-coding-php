<?php
//----------------------------------------------------
// Removing elements from an array
//----------------------------------------------------

// Start with a sample array
$numbers = [5, 2, 8, 1, 9, 10]; // current array

//----------------------------------------------------
// Example 1: Remove the last element using array_pop()
// array_pop() always removes the last item in the array
//----------------------------------------------------
array_pop($numbers); // removes 10
echo "After pop(): ";
print_r($numbers);
echo "<br>"; // Output: [5, 2, 8, 1, 9]

//----------------------------------------------------
// Example 2: Remove a specific number (e.g., 9)
// Use array_search() to find the index, then unset() to remove
//----------------------------------------------------
$key = array_search(9, $numbers); // find the index of 9
if ($key !== false) {
    unset($numbers[$key]); // remove 9
}
// Reindex the array so keys are consecutive
$numbers = array_values($numbers);

echo "After removing 9: ";
print_r($numbers);
echo "<br>"; // Output: [5, 2, 8, 1]
//----------------------------------------------------
// Quick notes:
// - array_pop() removes the last element of an array.
// - To remove a specific value, use array_search() + unset().
// - unset() removes an element but leaves gaps in numeric keys.
// - array_values() fixes the keys so they are consecutive starting from 0.
//----------------------------------------------------
