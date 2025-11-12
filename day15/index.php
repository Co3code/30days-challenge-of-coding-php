<?php
    // day15/index.php
    session_start();

    $message = '';

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $username = trim($_POST['username']);

        if (! empty($username)) {
            $_SESSION['username'] = $username;
            header("Location: page2.php");
            exit;
        } else {
            $message = "Please enter your name.";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Session Demo</title>
</head>
<body>
    <h1>day 15 session basics</h1>
    <form method="POST">
        <label>Enter your name:</label><br>
        <input type="text" name="username" required>
        <button type="submit">Start Session</button>
    </form>

    <p style="color:red;"><?php echo $message; ?></p>
</body>
</html>
