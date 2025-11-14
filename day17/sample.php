<!-- sample changing color theme --> 
<?php if (isset($_GET["theme"])) {
        $_SESSION["theme"] = $_GET["theme"]; // save the preference
    }
    // pick theme or fallback
    $theme = $_SESSION["theme"] ?? "light";
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body style="background-color:                                                                                                                         <?php echo $theme === 'dark' ? '#222' : '#fff' ?>;
             color:                                                                             <?php echo $theme === 'dark' ? '#fff' : '#000' ?>;">
<p>Choose theme:</p>
<a href="?theme=light">Light Mode</a> |
<a href="?theme=dark">Dark Mode</a>

</body>
</html>

