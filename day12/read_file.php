<?php

$filename = "messages.txt";
// defines a variable called $filename and stores the name of the file you want to read

if (file_exists($filename)) {
    // checks if a file actually exists on your computer before opening
    // looks at the path stored in $filename (here, "message.txt")

    $file = fopen($filename, "r");
    // fopen is a function to open a file. It has two main parts:
    // 1. $filename → the name of the file to open
    // 2. "r" → mode for opening the file. "r" means read-only (you only want to read, not write)
    // $file now becomes a file handle (like a pointer) that PHP can use to read the file line by line
    echo "<h2>Messages from file</h2>";
    echo "<ul>";

    while (! feof($file)) {
        // feof($file) checks if we have reached the "end of file"
        // !feof($file) means "keep going until the end of the file"
        // so this loop will run for every line in the file

        $line = fgets($file);
        // fgets($file) reads **one line at a time** from the file
        // each time the loop runs, $line stores the next line in the file

        if (! empty(trim($line))) {
            // trim($line) removes any spaces or invisible characters at the start and end
            // empty() checks if the line is empty
            // !empty(...) means "if the line is NOT empty", then run the next code
            // if the line has text → it gets printed inside <li>
            // if the line is empty → echo does not run, and PHP just goes to the next line

            echo "<li>" . htmlspecialchars($line) . "</li>";
            // echo prints the line inside an HTML <li> tag (a list item)
            // htmlspecialchars() converts special characters to HTML-safe codes

        }
    }

    echo "</ul>"; // close the HTML list

    fclose($file); //fclose($file) closes the file you opened with fopen().
// close the file handle when done reading

} else {
    // If file doesn't exist
    echo "<p> no file found</p>";

}

//feof stands for "file end of file"  It checks if the file pointer has reached the end of the file. example feof → asks: “Have I reached the last page?” !feof → “Not yet, keep reading!”

//fgets() stands for “file get string" read one line at a time from a file
