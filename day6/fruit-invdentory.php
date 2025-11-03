<?php
// ----------------------------
// FRUIT INVENTORY / GROCERY LIST
// Features:
// 1. Add new fruits to the list
// 2. Show all fruits
// 3. Search for a fruit
// ----------------------------

// Indexed array to store fruits
$fruits = ["Apple", "Banana", "Mango", "Orange"];

// ----------------------------
// FUNCTION: Display all fruits
// ----------------------------
function showFruits($fruits) {
    echo "<h3>All Fruits:</h3>";
    foreach ($fruits as $fruit) {
        echo "- $fruit<br>";
    }
}

// ----------------------------
// FUNCTION: Add a fruit
// ----------------------------
function addFruit(&$fruits, $newFruit) {
    // &$fruits → Pass the array by reference
    // This means the original $fruits array will be updated
    // without & → only a copy would be updated, original stays the same

    $fruits[] = $newFruit; // Add the new fruit to the array

    echo "<p>Added: $newFruit</p>"; // Display a message that the fruit was added
}
// ----------------------------
// FUNCTION: Search for a fruit
// ----------------------------
function searchFruit($fruits, $search) {
    if (in_array($search, $fruits)) {
        echo "<p>Fruit '$search' found! </p>";
    } else {
        echo "<p>Fruit '$search' not found! </p>";
    }
}

// ----------------------------
// TESTING THE FUNCTIONS
// ----------------------------

// Show initial list
showFruits($fruits);

// Add a new fruit
addFruit($fruits, "Pineapple");

// Show updated list
showFruits($fruits);

// Search for a fruit
searchFruit($fruits, "Mango");
searchFruit($fruits, "Strawberry");

// ----------------------------
// EXPECTED OUTPUT
// ----------------------------
// All Fruits:
// - Apple
// - Banana
// - Mango
// - Orange
//
// Added: Pineapple
//
// All Fruits:
// - Apple
// - Banana
// - Mango
// - Orange
// - Pineapple
//
// Fruit 'Mango' found! 
// Fruit 'Strawberry' not found! 
?>
