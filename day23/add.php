<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $records = json_decode(file_get_contents("data.json"), true);

    if (!is_array($records)) {
        $records = [];
    }

    $new = [
        "id" => time(), // unique ID
        "name" => trim($_POST["name"])
    ];

    $records[] = $new;

    file_put_contents("data.json", json_encode($records, JSON_PRETTY_PRINT));

    header("Location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Add Record</title>
</head>
<body>

<h2>Add New Record</h2>

<form method="POST">
    <label>Name:</label><br>
    <input type="text" name="name" required>
    <br><br>
    <button type="submit">Save</button>
</form>

</body>
</html>
