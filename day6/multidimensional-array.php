<?php
// ----------------------------
// MULTIDIMENSIONAL ARRAY
// ----------------------------

// Array of students, each student is an associative array
// $students is an array of arrays → called a multidimensional array
// Each inner array has keys: "name", "course", "year"
// Think of it like a table: each row is a student, each column is a property
$students = [
    ["name" => "John", "course" => "BSIT", "year" => 2],
    ["name" => "Anna", "course" => "BSCS", "year" => 3],
    ["name" => "Mark", "course" => "BSIT", "year" => 1]
];

// ----------------------------
// DISPLAY STUDENTS
// ----------------------------
echo "<hr><h3>Multidimensional Array:</h3>";

foreach ($students as $student) {
    // Loop explanation:
    // foreach ($students as $student) → Go through each student in the $students array
    // $student["name"]   → Get the student’s name
    // $student["course"] → Get the student’s course
    // $student["year"]   → Get the student’s year
    // " - "              → Just a string to separate name and course
    // "<br>"             → Adds a line break in the browser
    echo $student["name"] . " - " . $student["course"] . " (Year " . $student["year"] . ")<br>";
}

// ----------------------------
// OUTPUT
// ----------------------------
// John - BSIT (Year 2)
// Anna - BSCS (Year 3)
// Mark - BSIT (Year 1)
?>
