<?php
    // Day 19 – Add, Edit, and Update Records (File Handling)
    // the question mark is called ternary operator. / Think of it like a mini-if-else on one line. makes code Makes code shorte

    $file = "records.txt";

    // Step 1: Load all records from the file
    $records = file_exists($file) ? file($file, FILE_IGNORE_NEW_LINES) : [];

    // Step 2: If user clicked "Edit", load the selected record
    $edit_index = isset($_GET["edit"]) ? (int) $_GET["edit"] : -1;

    $record_to_edit = ($edit_index >= 0 && $edit_index < count($records))
        ? $records[$edit_index]
        : "";

    // Step 3: Update an existing record
    if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["update_index"])) {
        $index        = (int) $_POST["update_index"];
        $updated_text = trim($_POST["updated_text"]);

        if ($updated_text !== "" && $index >= 0 && $index < count($records)) {
            // Replace the old text with the updated text
            $records[$index] = $updated_text;

            // Save the updated list back to the file
            file_put_contents($file, implode("\n", $records));
        }

        // Prevent resubmitting form on refresh
        header("Location: index.php");
        exit;
    }

    // Step 4: Add a new record
    if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["new_record"])) {
        $new_record = trim($_POST["new_record"]);

        if ($new_record !== "") {
            $records[] = $new_record;
            file_put_contents($file, implode("\n", $records));
        }

        header("Location: index.php");
        exit;
    }
    // ----------------------------------------------
    // Step 5: Delete a record
    // ----------------------------------------------
    if (isset($_GET["delete"])) {

        $delete_index = (int) $_GET["delete"]; // convert to number

        // Check if valid index to avoid errors
        if ($delete_index >= 0 && $delete_index < count($records)) {

            // Remove item from array
            unset($records[$delete_index]);

            // Re-index array (so the indexes become 0,1,2...)
            $records = array_values($records);

            // Save the updated list back into the text file
            file_put_contents($file, implode("\n", $records));
        }

        // Redirect back to main page (prevents deleting again on refresh)
        header("Location: index.php");
        exit;
    }

?>

<!DOCTYPE html>
<html>
<head>
    <title>Day 19 - Edit & Update Records</title>
</head>
<body>

<h2>Day 19: Add, Edit, and Update Records</h2>

<h3>All Saved Records</h3>
<ul>
    <?php foreach ($records as $i => $r): ?>
        <li>
            <?php echo htmlspecialchars($r); ?>
            <a href="?edit=<?php echo $i; ?>">Edit</a>
            <a href="?delete=<?php echo $i ?>"style="color:red;">Delete</a>
        </li>
    <?php endforeach; ?>
</ul>

<hr>

<!-- Add new record form -->
<h3>Add New Record</h3>
<form method="POST">
    <input type="text" name="new_record" required>
    <button type="submit">Add</button>
</form>

<hr>

<!-- Edit record form -->
<?php if ($edit_index >= 0): ?>
    <h3>Edit Record</h3>

    <form method="POST">
        <input type="hidden" name="update_index" value="<?php echo $edit_index; ?>">

        <textarea name="updated_text" rows="3" cols="40" required><?php echo htmlspecialchars($record_to_edit);  ?></textarea>
                                                                                                                                 
        <br><br>

        <button type="submit">Save Changes</button>
        <a href="index.php">Cancel</a>
    </form>
<?php endif; ?>

</body>
</html>
