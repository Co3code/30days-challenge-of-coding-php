<?php
require "db.php";

$id       = 1;
$newEmail = "updated@example.com";

$stmt = $db->prepare("UPDATE users SET email = ? WHERE id = ?");
$stmt->execute([$newEmail, $id]);

echo "Updated!";
