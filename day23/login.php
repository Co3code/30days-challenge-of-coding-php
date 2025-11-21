<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = trim($_POST["username"]);
    $password = trim($_POST["password"]);

    // Load users
    $users = json_decode(file_get_contents("users.json"), true);

    // Find user
    foreach ($users as $user) {
        if ($user["username"] === $username) {
            if (password_verify($password, $user["password"])) {
                $success = "Login successful! Welcome, $username.";
            } else {
                $error = "Incorrect password!";
            }
        }
    }

    if (!isset($success) && !isset($error)) {
        $error = "Username not found!";
    }
}

?>

<!DOCTYPE html>
<html>
<body>
    <h2>Login</h2>

    <?php if(isset($error)) echo "<p style='color:red;'>$error</p>"; ?>
    <?php if(isset($success)) echo "<p style='color:green;'>$success</p>"; ?>

    <form method="POST">
        <input type="text" name="username" placeholder="Username" required><br><br>
        <input type="password" name="password" placeholder="Password" required><br><br>
        <button type="submit">Login</button>
    </form>

</body>
</html>
