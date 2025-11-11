<?php
    // day14/index.php

    $uploadDir = 'uploads/';
    $message   = '';

    // Create the uploads folder if not exists
    if (! file_exists($uploadDir)) {
        mkdir($uploadDir, 0777, true);
    }

    // Check if form submitted
    if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_FILES["file"])) {
        $fileName  = $_FILES["file"]["name"];
        $fileTmp   = $_FILES["file"]["tmp_name"];
        $fileSize  = $_FILES["file"]["size"];
        $fileError = $_FILES["file"]["error"];

        // Allowed file types
        $allowedExt = ['jpg', 'jpeg', 'png', 'gif', 'pdf'];
        $fileExt    = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));

        // Validate
        if ($fileError !== 0) {
            $message = " Error uploading file!";
        } elseif (! in_array($fileExt, $allowedExt)) {
            $message = " Only JPG, PNG, GIF, or PDF files allowed!";
        } elseif ($fileSize > 2 * 1024 * 1024) { // 2MB limit
            $message = " File too large! Max 2MB.";
        } else {
            $newName = uniqid("upload_", true) . "." . $fileExt;
            $dest    = $uploadDir . $newName;

            if (move_uploaded_file($fileTmp, $dest)) {
                $message = " File uploaded successfully!";
            } else {
                $message = " Failed to move uploaded file.";
            }
        }
    }

    // Get all uploaded files
    $files = array_diff(scandir($uploadDir), ['.', '..']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP File Upload</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f5f6fa;
            margin: 40px;
        }
        h1 { color: #2f3640; }
        form {
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            max-width: 400px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        input[type="file"] {
            display: block;
            margin: 10px 0;
        }
        button {
            background: #40739e;
            color: #fff;
            padding: 8px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .message { margin-top: 10px; font-weight: bold; }
        .gallery img {
            width: 150px;
            margin: 10px;
            border-radius: 10px;
            box-shadow: 0 0 5px rgba(0,0,0,0.2);
        }
    </style>
</head>
<body>
    <h1> PHP File Upload</h1>

    <form method="POST" enctype="multipart/form-data">
        <label>Select a file:</label>
        <input type="file" name="file" required>
        <button type="submit">Upload</button>
    </form>

    <?php if ($message): ?>
        <p class="message"><?php echo $message?></p>
    <?php endif; ?>

    <h2>Uploaded Files:</h2>
    <div class="gallery">
        <?php foreach ($files as $f): ?>
            <?php if (preg_match('/\.(jpg|jpeg|png|gif)$/i', $f)): ?>
                <img src="<?php echo $uploadDir . $f?>" alt="Uploaded image">
            <?php else: ?>
                <p><a href="<?php echo $uploadDir . $f?>" target="_blank"><?php echo $f?></a></p>
            <?php endif; ?>
        <?php endforeach; ?>
    </div>
</body>
</html>
