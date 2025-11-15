
<?php

    session_start();

    if (! isset($_SESSION['username'])) {
        header("location: index.php");
        exit;

    }

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>WELCOME,<?php echo htmlspecialchars($_SESSION['username']); ?>!</h2>
    <p>You are inside a protected page.</p>

    <a href="logout.php">logout</a>
</body>
</html>