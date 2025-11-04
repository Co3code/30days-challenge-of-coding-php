<?php
// Day 7: Array Functions and Manipulation

echo "<h2>Array Functions in PHP</h2>";

//  Sample array
$numbers = [5, 2, 8, 1, 9];

// 1. count() - number of elements
echo "Total numbers: " . count($numbers) . "<br>";

// 2. sort() - sort ascending
sort($numbers);
echo "Sorted ascending: ";
print_r($numbers);
echo "<br>";

// 3. rsort() - sort descending
rsort($numbers);
echo "Sorted descending: ";
print_r($numbers);
echo "<br>";

// 4. array_push() - add elements to end
array_push($numbers, 10);
echo "After push(10): ";
print_r($numbers);
echo "<br>";

// 5. array_pop() - remove last element
array_pop($numbers);
echo "After pop(): ";
print_r($numbers);
echo "<br>";

// 6. array_merge() - combine arrays
$even = [2, 4, 6];
$odd = [1, 3, 5];
$merged = array_merge($even, $odd);
echo "Merged array: ";
print_r($merged);
echo "<br>";

// 7. in_array() - check if value exists
if (in_array(4, $merged)) {
    echo "4 is in the merged array!<br>";
}

// 8. array_sum() - total of all values
echo "Sum of numbers: " . array_sum($merged) . "<br>";

// 9. array_unique() - remove duplicates
$duplicates = [1, 2, 2, 3, 3, 3];
$unique = array_unique($duplicates);
echo "After removing duplicates: ";
print_r($unique);
echo "<br>";
?>
