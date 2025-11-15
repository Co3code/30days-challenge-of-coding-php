<?php
    session_start();

    // 1. FLASH MESSAGE EXAMPLE -------------------------------------

    if (! isset($_SESSION["flash_message"])) {
        $_SESSION["flash_message"] = "Welcome back to Day 17! This message will disappear after refresh.";
    }

    // Save the flash message in a temporary variable
    $flash = $_SESSION["flash_message"] ?? null;

    // Remove flash message so it only shows once
    unset($_SESSION["flash_message"]);

    // 2. PAGE COUNTER ----------------------------------------------

    if (! isset($_SESSION["count"])) {
        $_SESSION["count"] = 1;
    } else {
        $_SESSION["count"]++;
    }

    // 3. USER PREFERENCE (THEME MODE) -------------------------------

    if (isset($_GET["theme"])) {
        $_SESSION["theme"] = $_GET["theme"]; // save the preference
    }

    // pick theme or fallback
    $theme = $_SESSION["theme"] ?? "light";

    //this is just testing if the session is working when i refresh the browser
    // var_dump($_SESSION);
    // echo "Session ID: " . session_id();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Day 17 - Advanced Sessions</title>
</head>

<body style="background-color:                                                                                                                         <?php echo $theme === 'dark' ? '#222' : '#fff' ?>;
             color:                                                                             <?php echo $theme === 'dark' ? '#fff' : '#000' ?>;">

<h2>Day 17: Advanced Session Features</h2>

<!-- FLASH MESSAGE -->
<?php if ($flash): ?>
    <p style="color: green; font-weight: bold;"><?php echo $flash ?></p>
<?php endif; ?>

<!-- PAGE COUNTER -->
<p>You have visited this page <strong><?php echo $_SESSION["count"] ?></strong> times this session.</p>

<!-- THEME SWITCHER -->
<p>Choose theme:</p>
<a href="?theme=light">Light Mode</a> |
<a href="?theme=dark">Dark Mode</a>

<br><br>

<p>Current theme: <strong><?php echo $theme ?></strong></p>

</body>
</html>
