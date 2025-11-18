<?php
    // ----------------------------------------------
    // DAY 21: COOKIES BASICS
    // ----------------------------------------------

    // 1. SET COOKIE WHEN FORM IS SUBMITTED
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $name = trim($_POST["name"]);

        // setcookie(name, value, expiration_time)
        // Cookie will last 7 days
        setcookie("username", $name, time() + (7 * 24 * 60 * 60));
        header("Location: index.php");
        exit;
    }

    // 2. READ COOKIE
    $savedName = $_COOKIE["username"] ?? null;

    // 3. DELETE COOKIE
    if (isset($_GET["delete"])) {
        setcookie("username", "", time() - 3600); // expired
        header("Location: index.php");
        exit;
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
    <p>Welcome back, <strong><?php echo htmlspecialchars($savedName); ?></strong>! (Remembered by Cookie)</p>
    <a href="?delete=true">Forget me</a>
<?php else: ?>
    <p>No cookie found. Enter your name:</p>
    <form method="POST">
        <input type="text" name="name" required>
        <button type="submit">Save</button>
    </form>
<?php endif; ?>

</body>
</html>
