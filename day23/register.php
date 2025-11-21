<?php

// If the form is submitted
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = trim($_POST["username"]);
    $password = trim($_POST["password"]);

    // Load existing users
    $users = json_decode(file_get_contents("users.json"), true);

    // Check if username already exists
    foreach ($users as $user) {
        if ($user["username"] === $username) {
            $error = "Username already taken!";
        }
    }

    // If no error, save new user
    if (!isset($error)) {
        $users[] = [
            "username" => $username,
            "password" => password_hash($password, PASSWORD_DEFAULT)
        ];

        file_put_contents("users.json", json_encode($users, JSON_PRETTY_PRINT));

        $success = "Registration successful! You can now login.";
    }
}

?>

<!DOCTYPE html>
<html>
<body>
    <h2>Register</h2>

    <?php if(isset($error)) echo "<p style='color:red;'>$error</p>"; ?>
    <?php if(isset($success)) echo "<p style='color:green;'>$success</p>"; ?>

    <form method="POST">
        <input type="text" name="username" placeholder="Username" required><br><br>
        <input type="password" name="password" placeholder="Password" required><br><br>
        <button type="submit">Register</button>
    </form>

</body>
</html>
