<?php
$posts = json_decode(file_get_contents("posts.json"), true);

$id = $_POST["id"];
$title = trim($_POST["title"]);
$content = trim($_POST["content"]);

foreach ($posts as &$p) {
    if ($p["id"] == $id) {
        $p["title"] = $title;
        $p["content"] = $content;
    }
}

file_put_contents("posts.json", json_encode($posts, JSON_PRETTY_PRINT));

header("Location: index.php");
exit;
