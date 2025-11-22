<?php
    require "db.php";

    // Delete record
    if (isset($_GET["delete"])) {
        $id   = $_GET["delete"];
        $stmt = $db->prepare("DELETE FROM students WHERE id = ?");
        $stmt->execute([$id]);
        header("Location: index.php");
        exit;
    }

    // Fetch all records
    $students = $db->query("SELECT * FROM students")->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Day 25 - SQLite CRUD</title>
</head>
<body>

<h2>Day 25: SQLite CRUD</h2>

<a href="add.php">Add New Student</a>
<br><br>

<table border="1" cellpadding="5">
    <tr>
        <th>ID</th><th>Name</th><th>Email</th><th>Action</th>
    </tr>

    <?php foreach ($students as $s): ?>
        <tr>
            <td><?php echo $s["id"]?></td>
            <td><?php echo htmlspecialchars($s["name"])?></td>
            <td><?php echo htmlspecialchars($s["email"])?></td>
            <td>
                <a href="edit.php?id=<?php echo $s["id"]?>">Edit</a> |
                <a href="?delete=<?php echo $s["id"]?>" onclick="return confirm('Delete this record?')">Delete</a>
            </td>
        </tr>
    <?php endforeach; ?>

</table>

</body>
</html>
