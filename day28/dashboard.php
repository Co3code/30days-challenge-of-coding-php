<?php
session_start();

if (!isset($_SESSION["user"])) {
    header("Location: login.php");
    exit;
}

$user = $_SESSION["user"];
?>
<!DOCTYPE html>
<html>
<head>
    <title>User Dashboard</title>
</head>
<body>

<h1>Hello, <?= htmlspecialchars($user["fullname"]) ?> 👋</h1>

<p><strong>Username:</strong> <?= htmlspecialchars($user["username"]) ?></p>
<p><strong>User ID:</strong> <?= $user["id"] ?></p>

<a href="logout.php">Logout</a>

</body>
</html>
