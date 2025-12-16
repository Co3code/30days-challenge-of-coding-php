<?php
require 'auth.php';

// Decode the posts from the JSON file
$posts = json_decode(file_get_contents("posts.json"), true);

// Get and sanitize the input
$id      = $_POST["id"];
$title   = trim($_POST["title"]);
$content = trim($_POST["content"]);

// Validate if title and content are not empty
if (empty($title) || empty($content)) {
    // Redirect with an error message if fields are empty
    header("Location: edit.php?id=$id&error=Please fill in both title and content");
    exit();
}

// Check if the post ID exists in the posts array
$postFound = false;
foreach ($posts as &$p) {
    if ($p["id"] == $id) {
        // Update the post if ID matches
        $p["title"]   = $title;
        $p["content"] = $content;
        $postFound    = true;
        break;
    }
}

// If the post ID doesn't exist, show an error
if (! $postFound) {
    header("Location: index.php?error=Post not found");
    exit();
}

// Save the updated posts array back to the JSON file
file_put_contents("posts.json", json_encode($posts, JSON_PRETTY_PRINT));

// Redirect to the post list or the specific post page with a success message
header("Location: index.php?success=Post updated successfully");
exit();
