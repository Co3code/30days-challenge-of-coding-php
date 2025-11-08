<?php
// Check if the form was submitted using POST method
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Clean and sanitize the form inputs using test_input()
    // This makes the data safer to use (removes extra spaces, backslashes, and HTML special characters)
    $name  = test_input($_POST["name"]);
    $email = test_input($_POST["email"]);

    // You can now safely use $name and $email in your code
    // For example: display, save to a file, or insert into a database
    echo "Name: $name <br>";
    echo "Email: $email <br>";
}

// ------------------------
// Function: test_input()
// ------------------------
// Purpose: Clean and sanitize user input from forms
// Input:  $data (the raw data from the user)
// Output: $data cleaned (trimmed, backslashes removed, HTML chars converted)
//
// Steps:
// 1️⃣ trim() → removes extra spaces from the beginning and end
// 2️⃣ stripslashes() → removes backslashes (\) that might have been added
// 3️⃣ htmlspecialchars() → converts special HTML characters to safe text
function test_input($data)
{
    $data = trim($data);             // Remove extra spaces
    $data = stripslashes($data);     // Remove backslashes
    $data = htmlspecialchars($data); // Convert HTML special chars to safe text
    return $data;                    // Return the cleaned data
}
