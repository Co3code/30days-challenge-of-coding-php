<?php
    // day13/index.php

    $file    = 'messages.txt';
    $message = '';
    $error   = '';

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $name    = trim($_POST['name']);
        $comment = trim($_POST['comment']);

        // Validation
        if (empty($name) || empty($comment)) {
            $error = "Both name and message are required!";
        } else {
            // Format message
            $entry = "👤 $name\n💬 $comment\n🕒 " . date('Y-m-d H:i:s') . "\n-------------------------\n";
            file_put_contents($file, $entry, FILE_APPEND);
            $message = "Thank you, $name! Your message has been added.";
        }
    }

    // Read existing messages
    $guestbook = file_exists($file) ? file_get_contents($file) : "No messages yet. Be the first to write!";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Guestbook</title>
    <style>
        body {

            display: flex;
            align-items: center;
            font-family: Arial, sans-serif;
            background: #f5f6fa;
            margin: 40px;
            flex-direction: column;
            align-items: center;
        }
        h1 {
            color: #2f3640;
        }
        form {

            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            max-width: 400px;

        }
        input, textarea {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            border: 1px solid #dcdde1;
            border-radius: 5px;
        }
        button {
            background: #40739e;
            color: #fff;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            cursor: pointer;
        }
        .error { color: red; }
        .success { color: green; }
        pre {
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 5px rgba(0,0,0,0.1);
            max-width: 400px;
            white-space: pre-wrap;
        }
    </style>
</head>
<body>
    <h1>PHP Guestbook</h1>

    <?php if ($error): ?>
        <p class="error"><?php echo $error ?></p>
    <?php elseif ($message): ?>
        <p class="success"><?php echo $message ?></p>
    <?php endif; ?>

    <form method="POST">
        <label>Name:</label>
        <input type="text" name="name">

        <label>Message:</label>
        <textarea name="comment" rows="4"></textarea>

        <button type="submit">Submit</button>
    </form>

    <h2> Guestbook Messages:</h2>
    <pre><?php echo htmlspecialchars($guestbook) ?></pre>
</body>
</html>
