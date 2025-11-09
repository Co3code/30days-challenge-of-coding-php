<?php
// Step 1: Set the filename
$filename = "messages.txt";

// Step 2: Check if the file exists
if (file_exists($filename)) {
    // Step 3: Open the file for reading
    $file = fopen($filename, "r");

    // Step 4: Read file line by line
    echo "<h2>📜 Messages from File:</h2>";
    echo "<ul>";

    while (! feof($file)) {
        $line = fgets($file);
        if (! empty(trim($line))) {
            echo "<li>" . htmlspecialchars($line) . "</li>";
        }
    }

    echo "</ul>";

    // Step 5: Close the file
    fclose($file);
} else {
    echo "<p>No file found. Please create messages.txt first.</p>";
}
