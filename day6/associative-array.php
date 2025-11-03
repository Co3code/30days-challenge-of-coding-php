<?php
// ----------------------------
// ASSOCIATIVE ARRAY (key => value)
// ----------------------------

// Create an associative array called $user
// Syntax: "key" => "value"
// Read as: "key is this value"
$user = [
    "name"   => "Anthony", // key "name" has value "Anthony"
    "age"    => 20,        // key "age" has value 20
    "course" => "IT",      // key "course" has value "IT"
];

// Display the array values using keys
echo "<h3>Associative Array:</h3>";
echo "Name: " . $user["name"] . "<br>";     // prints: Name: Anthony
echo "Age: " . $user["age"] . "<br>";       // prints: Age: 20
echo "Course: " . $user["course"] . "<br>"; // prints: Course: IT

// ----------------------------
// NUMERIC ARRAY (no keys)
// ----------------------------

// If you skip the =>, PHP uses numbers 0, 1, 2 automatically
$numbers = ["Anthony", 20, "IT"];

// Display the array values using numeric indexes
echo "<h3>Numeric Array:</h3>";
echo "Name: " . $numbers[0] . "<br>";   // prints: Name: Anthony
echo "Age: " . $numbers[1] . "<br>";    // prints: Age: 20
echo "Course: " . $numbers[2] . "<br>"; // prints: Course: IT

// ----------------------------
// HOW TO READ =>
// ----------------------------
// "name" => "Anthony"  => Read as "name is Anthony"
// "age"  => 20          => Read as "age is 20"
// It's like: key points to value, or key = value
// Think of it as “points to” or “is”.
// Example: "name" => "Anthony"  → name is Anthony
// Symbol => is called the double arrow (read as “is” / “points to”) ✅
