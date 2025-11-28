<?php
require 'auth.php'; 

$posts = json_decode(file_get_contents("posts.json"), true);

$title = trim($_POST["title"]);
$content = trim($_POST["content"]);

$newPost = [
    "id" => count($posts) + 1,
    "title" => $title,
    "content" => $content,
    "created_at" => date("Y-m-d H:i:s")
];

$posts[] = $newPost;

file_put_contents("posts.json", json_encode($posts, JSON_PRETTY_PRINT));

header("Location: index.php");
exit;
?>