<?php
    // day15/page2.php
    session_start();

    if (! isset($_SESSION['username'])) {
        header("Location: index.php");
        exit;
    }

    $username = $_SESSION['username'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Session Page 2</title>
</head>
<body>
    <h1>Hello,               <?php echo htmlspecialchars($username); ?>!</h1>
    <p> this data is stored in your PHP session.</p>
    <a href="logout.php">Logout</a>
</body>
</html>
