<?php
// ===================================================================
// Real Project: Using Constants in a Student Grade Portal
// ===================================================================

// Defining Constants
define("SITE_NAME", "Student Grade Portal"); // Website name
define("PASSING_SCORE", 50);                 // Minimum passing score
define("MAX_SCORE", 100);                    // Maximum score

// Example Student Data
$student_name  = "John Doe";
$student_score = 78; // Student's score (can be dynamic based on input or database)

// Checking if the student has passed or failed
if ($student_score >= PASSING_SCORE) {
    $status = "passed";
} else {
    $status = "failed";
}

// ===================================================================
// Outputting the Results
// ===================================================================

echo "<h1>Welcome to " . SITE_NAME . "</h1>";
echo "<p>Student: " . $student_name . "</p>";
echo "<p>Score: " . $student_score . " / " . MAX_SCORE . "</p>";

// Using ucfirst() to capitalize the first letter of the status string
echo "<p>Status: " . ucfirst($status) . "</p>"; // Capitalizing the first letter of "passed" or "failed"

// Showing the passing score for reference
echo "<p>The passing score is: " . PASSING_SCORE . "</p>";
