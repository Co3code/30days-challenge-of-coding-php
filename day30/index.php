<?php
// note i will comeback this code to make changes and make it more appealinh im not done yet 
$posts = json_decode(file_get_contents("posts.json"), true);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Mini Blog</title>
</head>
<body>

<h2>Mini Blog - All Posts</h2>
<a href="add.php">➕ Add New Post</a>
<hr>

<?php if (count($posts) === 0): ?>
    <p>No posts yet.</p>
<?php endif; ?>

<?php foreach ($posts as $p): ?>
    <h3><?php echo htmlspecialchars($p["title"]); ?></h3>
    <p><?php echo substr(htmlspecialchars($p["content"]), 0, 100) . "..."; ?></p>
    <a href="show.php?id=<?php echo $p["id"]; ?>">Read More</a> |
    <a href="edit.php?id=<?php echo $p["id"]; ?>">Edit</a> |
    <a href="delete.php?id=<?php echo $p["id"]; ?>">Delete</a>

    <hr>
<?php endforeach; ?>

</body>
</html>
