<?php
    $filename = "messages.txt";

    // Handle form submission
    if ($_SERVER["REQUEST_METHOD"] === "POST" && ! empty($_POST["message"])) {
      //&& → Logical AND. Both conditions on its sides must be true for the whole
       //!empty($_POST["message"]) → Checks if the message input from the form is not empty.     
      
      $message = trim($_POST["message"]);
      // Gets the message from the form and removes extra spaces 
      // at the start and end so the data saved is clean
        $file    = fopen($filename, "a");
        //"a" means append mode. any data written to the file will be added to the end of its existing contents
        //“Open this file to write new data, but don’t erase what’s already inside — just add new text at the end.”
       
        fwrite($file, $message . PHP_EOL);
        // fwrite stands for "file write" used to write data into an open file
        // $file → the file handle (opened by fopen)
        // $message → the text to save
        //PHP_EOL → Means “End Of Line”, a special symbol that adds a new line after each message (so they don’t all end up on one line).
        fclose($file);
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Guestbook</title>
    <style>
        body { font-family: Arial; background: #f4f4f4; padding: 20px; }
        form { margin-bottom: 20px; }
        textarea { width: 100%; height: 60px; }
        button { background: #007bff; color: #fff; padding: 8px 15px; border: none; cursor: pointer; border-radius: 5px; }
        ul { background: #fff; padding: 10px; border-radius: 5px; }
        li { margin: 5px 0; }
    </style>
</head>
<body>
    <h2>Guestbook 📝</h2>

    <form method="POST">
        <textarea name="message" placeholder="Write your message here..."></textarea><br>
        <button type="submit">Save Message</button>
    </form>

    <h3>Previous Messages:</h3>
    <ul>
        <?php
            if (file_exists($filename)) {
                    // Check if the file actually exists
                $lines = file($filename, FILE_IGNORE_NEW_LINES);
                // file() reads the **entire file into an array**
                // Each line becomes an element in the $lines array
                // Each line becomes an element in the $lines array
                foreach ($lines as $line) {
                    if (! empty(trim($line))) {
                         // trim($line) removes spaces at the start/end
                         // empty() checks if the line is empty
                         // !empty(...) → run code only if the line has some content
                        echo "<li>" . htmlspecialchars($line) . "</li>";
                    }
                }
            } else {
                echo "<li>No messages yet.</li>";
            }
        ?>
    </ul>
</body>
</html>
