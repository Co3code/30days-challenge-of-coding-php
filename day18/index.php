<?php
    session_start();

    // Simulated stored hashed password (real apps store this in DB)
    $stored_username        = "tonton";
    $stored_hashed_password = password_hash("123", PASSWORD_DEFAULT);

    //testing if the passwor is hashed
    var_dump($stored_hashed_password);
    echo "<br>";
    var_dump($stored_username);

    // When form is submitted
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $username = trim($_POST["username"]);
        $password = trim($_POST["password"]);

        // Validate username & password
        if ($username === $stored_username && password_verify($password, $stored_hashed_password)) {

            // Store session
            $_SESSION["username"] = $username;

            // Redirect to protected page
            header("Location: dashboard.php");
            exit;
        }

        $error = "Invalid username or password! ";
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Day 18 - Secure Login</title>
</head>
<body>
    <h2>Day 18: Secure Login System</h2>

    <?php
        if (isset($error)) {
            echo " < p style = 'color:red;' > $error <  / p > ";
        }
    ?>

    <form action="" method="POST">
        <label>Username:</label><br>
        <input type="text" name="username" required><br><br>

        <label>Password:</label><br>
        <input type="password" name="password" required><br><br>

        <input type="submit" value="Login">
    </form>

</body>
</html>
