<?php
    require 'auth.php';

    $posts = json_decode(file_get_contents("posts.json"), true);

    $id = $_GET["id"];

    $post = null;
    foreach ($posts as $p) {
        // daan na code if($p["id"] == $id) $post = $p; tong wala pa na function ang edit 
        if ($p["id"] == $id) {
            $post = $p;
        }

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit</title>
</head>
<style>
        /* Body and page layout */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 500px;
            max-width: 90%;
        }

        h2 {
            text-align: center;
            color: #333;
        }

        /* Form styling */
        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin-bottom: 8px;
            font-weight: bold;
            color: #333;
        }

        input[type="text"], textarea {
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 14px;
            outline: none;
            width: 100%;
        }

        input[type="text"]:focus, textarea:focus {
            border-color: #4CAF50;
        }

        button {
            padding: 12px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #45a049;
        }

        /* Small fixes */
        textarea {
            resize: vertical;
        }

        .hidden {
            display: none;
        }

    </style>
<body>

<div class="container">
        <h2>Edit Post</h2>

        <form action="update.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $post["id"]; ?>">

            <label>Title</label>
            <input type="text" name="title" value="<?php echo htmlspecialchars($post["title"]); ?>" required>

            <label>Content:</label>
            <textarea name="content" rows="6" required><?php echo htmlspecialchars($post["content"]); ?></textarea>

            <button type="submit">Update Post</button>
        </form>
    </div>


</body>
</html>