<?php
    /*
 * FILE: arrays_functions.php
 * PURPOSE: Learn arrays and functions in PHP
 * AUTHOR: Co3code with Seek
 */

    echo "<h2>PHP Arrays & Functions</h2>";

    // ====================
    // ARRAYS - COLLECTIONS OF DATA
    // ====================

    echo "<h3>Arrays - Organized Data Collections</h3>";

    // Indexed array - numerical keys
    $fruits = ["Apple", "Banana", "Orange"];
    echo "Fruits array created<br>";

    // Accessing array elements
    echo "First fruit: " . $fruits[0] . "<br>";
    echo "Second fruit: " . $fruits[1] . "<br>";
    echo "Third fruit: " . $fruits[2] . "<br>";

    // Adding elements to array
    $fruits[] = "Mango";
    echo "Added new fruit: " . $fruits[3] . "<br>";

    // Associative array - key-value pairs
    $student = [
        "name"   => "Co3code",
        "age"    => 20,
        "course" => "IT",
        "active" => true,
    ];

    echo "<br>Student Information:<br>";
    echo "Name: " . $student["name"] . "<br>";
    echo "Age: " . $student["age"] . "<br>";
    echo "Course: " . $student["course"] . "<br>";

    // ====================
    // FUNCTIONS - REUSABLE CODE BLOCKS
    // ====================

    echo "<hr><h3>Functions - Reusable Code Modules</h3>";

    // Basic function definition
    function displayWelcome()
    {
        echo "Welcome to PHP Functions!<br>";
    }

    // Calling the function
    displayWelcome();

    // Function with parameters
    function greetUser($userName)
    {
        echo "Hello, " . $userName . "!<br>";
    }

    greetUser("Co3code");
    greetUser("PHP Learner");

    // Function with return value
    function calculateSquare($number)
    {
        $result = $number * $number;
        return $result;
    }

    $squareResult = calculateSquare(5);
    echo "Square of 5 is: " . $squareResult . "<br>";

    // Function with multiple parameters
    function calculateRectangleArea($length, $width)
    {
        return $length * $width;
    }

    $area = calculateRectangleArea(10, 5);
    echo "Rectangle area (10×5): " . $area . "<br>";

    // ====================
    // PRACTICAL EXAMPLE: STUDENT GRADES
    // ====================

    echo "<hr><h3>Practical Example: Student Grade Calculator</h3>";

    // Function to calculate grade
    function calculateGrade($score)
    {
        if ($score >= 90) {
            return "A";
        } elseif ($score >= 80) {
            return "B";
        } elseif ($score >= 70) {
            return "C";
        } else {
            return "F";
        }
    }

    // Array of students with scores
    $students = [
        ["name" => "Alice", "score" => 95],
        ["name" => "Bob", "score" => 82],
        ["name" => "Charlie", "score" => 68],
        ["name" => "Co3code", "score" => 88],
    ];

    // Display student grades using function
    echo "<table border='1' cellpadding='5'>";
    echo "<tr><th>Student Name</th><th>Score</th><th>Grade</th></tr>";

    foreach ($students as $student) {
        $grade = calculateGrade($student["score"]);
        echo "<tr>";
        echo "<td>" . $student["name"] . "</td>";
        echo "<td>" . $student["score"] . "</td>";
        echo "<td>" . $grade . "</td>";
        echo "</tr>";
    }

    echo "</table>";

    // ====================
    // INTERACTIVE PRACTICE
    // ====================

    echo "<hr><h3>Interactive Practice: Add Your Score</h3>";

    if (isset($_POST['add_score'])) {
        $student_name  = $_POST['student_name'];
        $student_score = $_POST['student_score'];
        $student_grade = calculateGrade($student_score);

        // Add to students array
        $students[] = ["name" => $student_name, "score" => $student_score];

        echo "<div style='background: #e8f4f8; padding: 10px; margin: 10px 0;'>";
        echo "New Student Added:<br>";
        echo "Name: " . $student_name . "<br>";
        echo "Score: " . $student_score . "<br>";
        echo "Grade: " . $student_grade . "<br>";
        echo "</div>";
    }
?>

<!-- Form to add new student -->
<form method="POST" style="margin-top: 20px;">
    <h4>Add New Student:</h4>
    <label>Student Name:</label><br>
    <input type="text" name="student_name" required><br><br>

    <label>Student Score (0-100):</label><br>
    <input type="number" name="student_score" min="0" max="100" required><br><br>

    <button type="submit" name="add_score">Add Student</button>
</form>
