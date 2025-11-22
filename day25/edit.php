<?php
    require "db.php";

    $id = $_GET["id"];

    // Fetch record
    $stmt = $db->prepare("SELECT * FROM students WHERE id = ?");
    $stmt->execute([$id]);
    $student = $stmt->fetch(PDO::FETCH_ASSOC);

    if (! $student) {
        die("Record not found.");
    }

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $name  = trim($_POST["name"]);
        $email = trim($_POST["email"]);

        $update = $db->prepare("UPDATE students SET name=?, email=? WHERE id=?");
        $update->execute([$name, $email, $id]);

        header("Location: index.php");
        exit;
    }
?>
<!DOCTYPE html>
<html>
<head><title>Edit Student</title></head>
<body>

<h2>Edit Student</h2>

<form method="POST">
    Name:<br>
    <input type="text" name="name" value="<?php echo htmlspecialchars($student["name"])?>" required><br><br>

    Email:<br>
    <input type="email" name="email" value="<?php echo htmlspecialchars($student["email"])?>" required><br><br>

    <button type="submit">Update</button>
</form>

</body>
</html>
