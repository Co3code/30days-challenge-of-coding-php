<?php 
// ----------------------------
// PHP IN_ARRAY() DEMO
// ----------------------------

// ----------------------------
// What is in_array()?
/*
in_array($needle, $haystack) checks if a value exists in an array.
- $needle → the value you want to search for
- $haystack → the array to search in
- Returns TRUE if found, FALSE if not
*/
 
// ----------------------------
// Example: Fruit array
$fruits = ["Apple", "Banana", "Mango", "Orange"];

// ----------------------------
// FUNCTION: Search for a fruit
// ----------------------------
function searchFruit($fruits, $search) {
    // Check if $search exists in the $fruits array
    if (in_array($search, $fruits)) {
        // Runs if the fruit is found
        echo "<p>Fruit '$search' found! </p>"; 
    } else {
        // Runs if the fruit is NOT found
        echo "<p>Fruit '$search' not found! </p>"; 
    }
}

// ----------------------------
// TESTING THE FUNCTION
// ----------------------------

// Search for a fruit that exists
searchFruit($fruits, "Mango");       // Mango is in the array

// Search for a fruit that does NOT exist
searchFruit($fruits, "Strawberry");  // Strawberry is NOT in the array

// ----------------------------
// How to Remember:
/*
- in_array() → asks: "Is this value in my box of items?"
- if() → checks TRUE or FALSE
- The code inside if() runs only if TRUE
- The code inside else runs if FALSE
*/

// ----------------------------
// Expected Output:
/*
Fruit 'Mango' found! 
Fruit 'Strawberry' not found! 
*/
?>
