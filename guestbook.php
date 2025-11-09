<?php
    $filename = "messages.txt";

    // Handle form submission
    if ($_SERVER["REQUEST_METHOD"] === "POST" && ! empty($_POST["message"])) {
        $message = trim($_POST["message"]);
        $file    = fopen($filename, "a");
        fwrite($file, $message . PHP_EOL);
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
                $lines = file($filename, FILE_IGNORE_NEW_LINES);
                foreach ($lines as $line) {
                    if (! empty(trim($line))) {
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
