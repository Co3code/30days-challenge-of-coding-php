<?php
// day10_form_validation.php

$name = $email = $age = "";
$nameErr = $emailErr = $ageErr = "";
$successMsg = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and validate Name
    if (empty($_POST["name"])) {
        $nameErr = "Name is required";
    } else {
        $name = htmlspecialchars(trim($_POST["name"]));
    }

    // Sanitize and validate Email
    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } elseif (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Invalid email format";
    } else {
        $email = htmlspecialchars(trim($_POST["email"]));
    }

    // Sanitize and validate Age
    if (empty($_POST["age"])) {
        $ageErr = "Age is required";
    } elseif (!is_numeric($_POST["age"])) {
        $ageErr = "Age must be a number";
    } else {
        $age = (int) $_POST["age"];
    }

    // If all fields are valid
    if (empty($nameErr) && empty($emailErr) && empty($ageErr)) {
        $successMsg = " Form submitted successfully!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Day 10 - Form Validation</title>
    <style>
        .error { color: red; }
        .success { color: green; font-weight: bold; }
    </style>
</head>
<body>
    <h1>Form Validation & Sanitization</h1>

    <?php if ($successMsg): ?>
        <p class="success"><?= $successMsg ?></p>
    <?php endif; ?>

    <form method="post" action="">
        <label>Name:</label><br>
        <input type="text" name="name" value="<?= htmlspecialchars($name) ?>">
        <span class="error"><?= $nameErr ?></span><br><br>

        <label>Email:</label><br>
        <input type="text" name="email" value="<?= htmlspecialchars($email) ?>">
        <span class="error"><?= $emailErr ?></span><br><br>

        <label>Age:</label><br>
        <input type="text" name="age" value="<?= htmlspecialchars($age) ?>">
        <span class="error"><?= $ageErr ?></span><br><br>

        <button type="submit">Submit</button>
    </form>
</body>
</html>
