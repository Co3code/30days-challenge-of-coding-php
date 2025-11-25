<?php
session_start();
require "db.php";

$message = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'] ?? "";
    $password = $_POST['password'] ?? "";

    $stmt = $pdo->prepare("SELECT * FROM users WHERE username = ?");
    $stmt->execute([$username]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user && password_verify($password, $user["password"])) {
        $_SESSION["user"] = [
            "id" => $user["id"],
            "username" => $user["username"],
            "fullname" => $user["fullname"]
        ];

        header("Location: dashboard.php");
        exit;
    } else {
        $message = "Invalid username or password.";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>

<h2>Login</h2>
<p style="color:red;"><?= $message ?></p>

<form method="POST">
    <label>Username:</label><br>
    <input type="text" name="username" required><br><br>

    <label>Password:</label><br>
    <input type="password" name="password" required><br><br>

    <button type="submit">Login</button>
</form>

</body>
</html>
