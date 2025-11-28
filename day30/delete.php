
<?php 
require 'auth.php'; 


$posts = json_decode(file_get_contents("posts.json"), true);
$id = $_GET["id"];

$newPosts = [];

foreach ($posts as $p) {
    if ($p["id"] != $id) {
        $newPosts[] = $p;
    }
}

file_put_contents("posts.json", json_encode($newPosts, JSON_PRETTY_PRINT));

header("Location: index.php");
exit;
