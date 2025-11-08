<?php
    // day11_file_handling.php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Clean and secure the input before saving
        $name    = htmlspecialchars(trim($_POST["name"]));
        $email   = htmlspecialchars(trim($_POST["email"]));
        $message = htmlspecialchars(trim($_POST["message"]));

        // Include date and time
        $timestamp = date("Y-m-d H:i:s");

        // Prepare data to save (this is what we’ll write to the file)
        $data = "[$timestamp] Name: $name | Email: $email | Message: $message" . PHP_EOL;

        // Save the data to a file
        // 👉 file_put_contents() writes data to a file.
        // The first argument is the filename ("submissions.txt")
        // The second is the data we want to write ($data)
        // The third (FILE_APPEND) means "add the new data at the end of the file"
        //    instead of overwriting the existing contents.
        // If "submissions.txt" doesn’t exist yet, PHP will automatically create it.
        file_put_contents("submissions.txt", $data, FILE_APPEND);

        echo "<p style='color:green;'>✅ Data saved successfully!</p>";

        // Display the submitted data back to the user
        echo "<strong>Name:</strong> $name <br>";
        echo "<strong>Email:</strong> $email <br>";
        echo "<strong>Message:</strong> $message <br>";
    }

?>

<!--  Explanation:
file_put_contents() → saves text to a file.
FILE_APPEND → adds new data at the end (instead of overwriting).
PHP_EOL → adds a line break (so each entry starts on a new line).
htmlspecialchars() + trim() → clean up input before saving.
date() → adds a timestamp, super useful for logs or entries.
-->
