<?php 
require "db.php";

$id = 1;

$stmt = $db->prepare("DELETE FROM users WHERE id = ?");
$stmt ->execute([$id]);
echo "deleted";