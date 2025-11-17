<?php
$file = "records.txt";

// Load records into an array
$records = file_exists($file) ? file($file, FILE_IGNORE_NEW_LINES) : [];
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Day 20 - Delete Records</title>
</head>
<body>
    <h2>Day 20: Delete Records</h2>

    <?php if (empty($records)): ?>
        <p>No records found.</p>
    <?php else: ?>
        <ul>
            <?php foreach ($records as $index => $item): ?>
                <li>
                    <?php echo htmlspecialchars($item); ?>
                    <a href="delete.php?index=<?php echo $index; ?>" 
                       onclick="return confirm('Are you sure you want to delete this item?');">
                        Delete
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>

</body>
</html>
