<?php
// ----------------------------
// PHP PASSING BY REFERENCE DEMO
// ----------------------------

// ----------------------------
// What is & ?
/*
The & before a function parameter means:
- "Pass this variable by reference."
- The function works on the **original variable**, not a copy.
- Changes inside the function **will affect the original variable**.
*/
// ----------------------------

// Example 1: WITHOUT &
$fruits1 = ["Apple", "Banana"];

function addFruitCopy($fruits, $newFruit)
{
    $fruits[] = $newFruit; // adds to COPY of array
}

addFruitCopy($fruits1, "Mango");
echo "<h3>Without &:</h3>";
echo "Original array remains unchanged:<br>";
print_r($fruits1); // Mango is NOT added

// ----------------------------

// Example 2: WITH &
$fruits2 = ["Apple", "Banana"];

function addFruitRef(&$fruits, $newFruit)
{
    $fruits[] = $newFruit; // adds to ORIGINAL array
    echo "<p>Added: $newFruit</p>";
}

addFruitRef($fruits2, "Mango");
echo "<h3>With &:</h3>";
echo "Original array is updated:<br>";
print_r($fruits2); // Mango IS added

// ----------------------------
// How to Remember:
/*
- Without &: function gets a COPY → original array stays the same
- With &: function gets the ORIGINAL → changes stick
- Think of & like a "pointer to the original box"

Expected Output:
Without &:
Original array remains unchanged:
Array
(
    [0] => Apple
    [1] => Banana
)

With &:
Added: Mango
Original array is updated:
Array
(
    [0] => Apple
    [1] => Banana
    [2] => Mango
)

Summary:
& → Pass by reference → modifies the original array
No & → Pass by value → only works on a copy
Essential for functions that update arrays or variables
*/
