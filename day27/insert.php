<?php
require "db.php";

$name  = "Anthony";
$email = "anthony@example.com";

$stmt = $db->prepare("INSERT INTO users (name, email) VALUES (?, ?)");
$stmt->execute([$name, $email]);

echo "Inserted!";
