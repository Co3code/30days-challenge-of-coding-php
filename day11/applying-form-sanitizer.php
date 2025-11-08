<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name    = test_input($_POST["name"]);
    $email   = test_input($_POST["email"]);
    $message = test_input($_POST["message"]);

    $timestamp = date("Y-m-d H:i:s");

    $data = "[$timestamp] Name: $name | Email: $email | Message: $message" . PHP_EOL;

    file_put_contents("submissions.txt", $data, FILE_APPEND);

    echo "<p style='color:green;'>✅ Data saved successfully!</p>";

    echo "<strong>Name:</strong> $name <br>";
    echo "<strong>Email:</strong> $email <br>";
    echo "<strong>Message:</strong> $message <br>";
}

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
