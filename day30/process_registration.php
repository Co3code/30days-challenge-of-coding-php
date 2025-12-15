<?php
require_once 'config.php';

// FUNCTIONS
function sanitizeInput($data)
{
    return htmlspecialchars(stripslashes(trim($data)));
}

function validateEmail($email)
{
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

function validatePassword($password)
{
    // Min 8 chars, 1 uppercase, 1 lowercase, 1 number
    return preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{8,}$/", $password);
}

// VARIABLES
$formErrors = [];

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $username         = sanitizeInput($_POST['username']);
    $email            = sanitizeInput($_POST['email']);
    $password         = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // BASIC VALIDATION
    if (empty($username)) {
        $formErrors[] = "Username is required";
    }

    if (empty($email)) {
        $formErrors[] = "Email is required";
    } elseif (! validateEmail($email)) {
        $formErrors[] = "Invalid email format";
    }

    if (empty($password)) {
        $formErrors[] = "Password is required";
    } elseif (! validatePassword($password)) {
        $formErrors[] = "Password must be at least 8 characters with uppercase, lowercase, and number";
    }

    if ($password !== $confirm_password) {
        $formErrors[] = "Passwords do not match";
    }

    // 🔍 CHECK IF USERNAME OR EMAIL ALREADY EXISTS
    if (empty($formErrors)) {

        $checkSql  = "SELECT id FROM users WHERE username = ? OR email = ?";
        $checkStmt = $conn->prepare($checkSql);
        $checkStmt->bind_param("ss", $username, $email);
        $checkStmt->execute();
        $checkStmt->store_result();

        if ($checkStmt->num_rows > 0) {
            $formErrors[] = "Username or Email already exists. Please choose another.";
        }

        $checkStmt->close();
    }

    // INSERT IF STILL NO ERRORS
    if (empty($formErrors)) {

        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        $sql  = "INSERT INTO users (username, email, password) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($sql);

        if ($stmt) {
            $stmt->bind_param("sss", $username, $email, $hashedPassword);

            if ($stmt->execute()) {
                header("Location: login.php?registered=1");
                exit;
            } else {
                $formErrors[] = "Database error: " . $stmt->error;
            }

            $stmt->close();
        } else {
            $formErrors[] = "Database preparation failed: " . $conn->error;
        }
    }
}
