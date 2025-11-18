<?php
    // ----------------------------------------------
    // DAY 21: COOKIES BASICS
    // ----------------------------------------------

    // 1. SET COOKIE WHEN FORM IS SUBMITTED
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $name = trim($_POST["name"]); // get name from form and remove spaces

                                                                   // setcookie(name, value, expiration_time)
                                                                   // Cookie will last 7 days
        setcookie("username", $name, time() + (7 * 24 * 60 * 60)); // save cookie
        header("Location: index.php");                             // refresh page to apply cookie
        exit;                                                      // stop script
    }

                                               // 2. READ COOKIE
    $savedName = $_COOKIE["username"] ?? null; // get cookie value if it exists

    // 3. DELETE COOKIE
    if (isset($_GET["delete"])) {
        setcookie("username", "", time() - 3600); // set past time = delete cookie
        header("Location: index.php");            // refresh page
        exit;                                     // stop script
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cookies Basics</title>
</head>
<body>

<h2>Day 21: Cookies Basics</h2>

<?php if ($savedName): ?>
    <!-- show this if cookie exists -->
    <p>Welcome back, <strong><?php echo htmlspecialchars($savedName); ?></strong>! (Remembered by Cookie)</p>
    <a href="?delete=true">Forget me</a> <!-- link to delete cookie -->
<?php else: ?>
    <!-- show this if no cookie -->
    <p>No cookie found. Enter your name:</p>
    <form method="POST">
        <input type="text" name="name" required> <!-- text input -->
        <button type="submit">Save</button> <!-- submit button -->
    </form>
<?php endif; ?>

</body>
</html>
