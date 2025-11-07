<?php
    // day10_save_form_data.php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name    = htmlspecialchars($_POST['name']);
        $email   = htmlspecialchars($_POST['email']);
        $message = htmlspecialchars($_POST['message']);

        // Create a formatted line to save
        $data = "Name: $name | Email: $email | Message: $message" . PHP_EOL;

        // Save to a file (append mode)
        file_put_contents("messages.txt", $data, FILE_APPEND);

        echo "<h3>✅ Message saved successfully!</h3>";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Day 10 - Save Form Data</title>
</head>
<body>
    <h1>Contact Form (Saved to File)</h1>
    <form action="" method="POST">
        <label>Name:</label><br>
        <input type="text" name="name" required><br><br>

        <label>Email:</label><br>
        <input type="email" name="email" required><br><br>

        <label>Message:</label><br>
        <textarea name="message" required></textarea><br><br>

        <button type="submit">Save</button>
    </form>
</body>
</html>
