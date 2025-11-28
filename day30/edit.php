<?php
require 'auth.php'; 

$posts = json_decode(file_get_contents("posts.json"), true);

$id = $_GET["id"];

$post = null;
foreach ($posts as $p){
       if($p["id"] ==  $id) $post = $p;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit</title>
</head>
<body>
    <h2>Edit Post</h2>

    <form action="update.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $post["id"]; ?>">

        <label>Title</label><br>
        <input type="text" name="title" value="<?php echo htmlspecialchars($post["title"]); ?>"required><br><br>

        <label >Content:</label>
        <textarea name="content" rows="6" required><?php echo htmlspecialchars($post["content"]); ?></textarea><br><br>
        <button type="submit">Post</button>
   
    </form>


    
</body>
</html>