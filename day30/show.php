<?php

require 'auth.php'; 

$posts = json_decode(file_get_contents("posts.json"), true);
$id = $_GET["id"];

$post = null;
foreach ($posts as $p) {
    if ($p["id"] == $id) $post = $p;
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>View Post</title>
</head>
<body>

<?php if (!$post): ?>
    <p>Post not found.</p>
    <a href="index.php">Back</a>
    <?php exit; ?>
<?php endif; ?>

<h2><?php echo htmlspecialchars($post["title"]); ?></h2>
<p><?php echo nl2br(htmlspecialchars($post["content"])); ?></p>
<small>Created: <?php echo $post["created_at"]; ?></small>
<br><br>

<a href="index.php">Back to all posts</a>

</body>
</html>
