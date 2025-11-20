<?php
$id = $_GET["id"] ?? null;

$records = json_decode(file_get_contents("data.json"), true);

$record = null;
foreach ($records as $item) {
    if ($item["id"] == $id) {
        $record = $item;
        break;
    }
}

if (!$record) {
    die("Record not found.");
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    foreach ($records as &$r) {
        if ($r["id"] == $id) {
            $r["name"] = trim($_POST["name"]);
            break;
        }
    }

    file_put_contents("data.json", json_encode($records, JSON_PRETTY_PRINT));

    header("Location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Record</title>
</head>
<body>

<h2>Edit Record</h2>

<form method="POST">
    <label>Name:</label><br>
    <input type="text" name="name" value="<?php echo htmlspecialchars($record['name']); ?>" required>
    <br><br>
    <button type="submit">Update</button>
</form>

</body>
</html>
