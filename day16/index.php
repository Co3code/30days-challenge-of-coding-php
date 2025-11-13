<?php
    // Always start the session at the top before any HTML output
    session_start();

    // Hardcoded credentials for testing (in real apps, these come from a database)
    $valid_username = "tonton";
    $valid_password = "123";

    // --- LOGOUT HANDLER ---
    // Check if the user clicked the "logout" link
    if (isset($_GET['logout'])) {
        // Destroy all session data and redirect to the login page
        session_destroy(); // Deletes all session data
        header("Location: index.php"); // Redirects to the login page again 
        exit;
    }

    // --- LOGIN HANDLER ---
    // Check if the form is submitted using POST
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the submitted username and password, removing extra spaces
        $username = trim($_POST["username"]);
        $password = trim($_POST["password"]);

        // Check if the entered credentials match the valid ones
        if ($username === $valid_username && $password === $valid_password) {
            // Save username in session (so user stays logged in)
            $_SESSION["username"] = $username;

            // Redirect to refresh the page and show the welcome message
            header("Location: index.php");
            exit; //stop running the PHP script right here.
        }

        // If login fails, store an error message
        $error = "Invalid username or password!";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>System Login - Day 16</title>
</head>
<body>
    <h2>Day 16: Login System with Session</h2>

    <?php if (isset($_SESSION["username"])): ?>
        <!-- If user is logged in, show welcome message -->
        <p>Welcome, <strong><?php echo htmlspecialchars($_SESSION["username"]); ?></strong>!</p>
        <p><a href="?logout=true">Logout</a></p>

    <?php else: ?>
        <!-- If user is NOT logged in, show login form -->
        <?php
            // Display the error message if login failed
            if (isset($error)) {
                echo "<p style='color:red;'>$error</p>";
            }
        ?>

        <form action="" method="POST">
            <label for="username">Username:</label><br>
            <input type="text" id="username" name="username" required><br><br>

            <label for="password">Password:</label><br>
            <input type="password" name="password" id="password" required><br><br>

            <input type="submit" value="Login">
        </form>
    <?php endif; ?>

</body>
</html>
