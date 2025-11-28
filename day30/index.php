<?php
require 'auth.php'; 
$posts = json_decode(file_get_contents("posts.json"), true);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Mini Blog</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2 class="text-primary">Mini Blog - All Posts</h2>
        <div>
            <a href="add.php" class="btn btn-success">➕ Add New Post</a>
            <a href="logout.php" class="btn btn-outline-danger">🚪 Logout</a>
        </div>
    </div>
    <hr>

    <?php if (count($posts) === 0): ?>
        <div class="alert alert-info">No posts yet.</div>
    <?php endif; ?>

    <?php foreach ($posts as $p): ?>
        <div class="card mb-3 shadow-sm">
            <div class="card-body">
                <h5 class="card-title"><?php echo htmlspecialchars($p["title"]); ?></h5>
                <p class="card-text">
                    <?php echo substr(htmlspecialchars($p["content"]), 0, 100) . "..."; ?>
                </p>
                <a href="show.php?id=<?php echo $p["id"]; ?>" class="btn btn-primary btn-sm">Read More</a>
                <a href="edit.php?id=<?php echo $p["id"]; ?>" class="btn btn-warning btn-sm">Edit</a>
                <a href="delete.php?id=<?php echo $p["id"]; ?>" class="btn btn-danger btn-sm">Delete</a>
            </div>
        </div>
    <?php endforeach; ?>
</div>

<!-- Bootstrap JS (optional for dropdowns, modals, etc.) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
