<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body>
    <h2> Add New Post</h2>
    <form action="store.php" method="POST">
    <label>Title:</label><br>
    <input type="text" name="title" required> <br><br>

    <label>Content:</label><br>
    <textarea name="content" rows="6" required></textarea><br><br>

    <input type="submit" value="Save Post">

    </form>

</body>
</html>
