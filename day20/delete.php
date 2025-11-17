<?php
$file = "records.txt";

// Load existing records
$records = file_exists($file) ? file($file, FILE_IGNORE_NEW_LINES) : [];

if (isset($_GET["index"])) {
    $i = (int)$_GET["index"];

    // Check if index exists
    if ($i >= 0 && $i < count($records)) {
        array_splice($records, $i, 1); // remove one item
        file_put_contents($file, implode("\n", $records));
    }
}

// Redirect back
header("Location: index.php");
exit;
