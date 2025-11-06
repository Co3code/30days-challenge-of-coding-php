<?php
// Day 9: PHP Form Handling (GET and POST)

// ✅ Check if form is submitted using POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);

    echo "<h3>Form Submitted (POST)</h3>";
    echo "Name: $name <br>";
    echo "Email: $email <br>";
}

// ✅ Check if form is submitted using GET
if (isset($_GET["color"])) {
    $color = htmlspecialchars($_GET["color"]);
    echo "<h3>Your favorite color (GET): $color</h3>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Day 9 - PHP Form Handling</title>
</head>
<body>
    <h2>POST Form Example</h2>
    <form method="POST" action="">
        <label for="name">Name:</label><br>
        <input type="text" name="name" required><br><br>

        <label for="email">Email:</label><br>
        <input type="email" name="email" required><br><br>

        <button type="submit">Submit (POST)</button>
    </form>

    <hr>

    <h2>GET Form Example</h2>
    <form method="GET" action="">
        <label for="color">Favorite Color:</label><br>
        <input type="text" name="color" placeholder="e.g. Blue"><br><br>

        <button type="submit">Submit (GET)</button>
    </form>
</body>
</html>
