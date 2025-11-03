<?php
// Day 6: Arrays in PHP

//  Indexed Array (like a list)
$fruits = ["Apple", "Banana", "Mango", "Orange"];
echo "<h3>Indexed Array:</h3>";
echo "First fruit: " . $fruits[0] . "<br>";
echo "All fruits:<br>";
foreach ($fruits as $fruit) {
    echo "- $fruit<br>";
}

// Associative Array (key => value)
$user = [
    "name" => "Anthony",
    "age" => 20,
    "course" => "IT"
];
echo "<hr><h3>Associative Array:</h3>";
echo "Name: " . $user["name"] . "<br>";
echo "Age: " . $user["age"] . "<br>";
echo "Course: " . $user["course"] . "<br>";

//  Multidimensional Array (array inside array)
$students = [
    ["name" => "John", "course" => "BSIT", "year" => 2],
    ["name" => "Anna", "course" => "BSCS", "year" => 3],
    ["name" => "Mark", "course" => "BSIT", "year" => 1]
];

echo "<hr><h3>Multidimensional Array:</h3>";
foreach ($students as $student) {
    echo $student["name"] . " - " . $student["course"] . " (Year " . $student["year"] . ")<br>";
}
//Run it inVSCodeterminal php - S localhost: 8080 - t day06;
?>


