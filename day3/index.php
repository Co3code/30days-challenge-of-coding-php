<?php
// Day 3: Conditionals and Logic

$username = "Anthony"; // Set the correct username
$password = "12345";   // Set the correct password

// Simulating user input (for example, from a form)
$inputUser = "Anthony"; // User's entered username
$inputPass = "12345";   // User's entered password

// Check if the username and password are correct
if ($inputUser === $username && $inputPass === $password) {
    // If both match, login is successful
    echo "<h2>Welcome, $username!</h2>";
    echo "<p>Login successful </p>";
} elseif ($inputUser === $username && $inputPass !== $password) {
    // If username matches but password doesn't, show an error
    echo "<p>Incorrect password </p>";
} elseif ($inputUser !== $username && $inputPass === $password) {
    // If password matches but username doesn't, show an error
    echo "<p>Unknown username </p>";
} else {
    // If both username and password are wrong, access is denied
    echo "<p>Access denied </p>";
}
//Run it inVSCodeterminal php - S localhost: 8080 - t day03;


