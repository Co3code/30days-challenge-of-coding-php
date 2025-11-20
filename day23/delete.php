<?php
$id = $_GET["id"] ?? null;

$records = json_decode(file_get_contents("data.json"), true);

$updated = [];

foreach ($records as $record) {
    if ($record["id"] != $id) {
        $updated[] = $record;
    }
}

file_put_contents("data.json", json_encode($updated, JSON_PRETTY_PRINT));

header("Location: index.php");
exit;
