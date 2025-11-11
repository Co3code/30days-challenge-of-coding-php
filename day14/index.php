<?php
    // day14/index.php
    //set the folder path where uploaded files will be saved / means inside this folder
    $uploadDir = 'uploads/';

    // Initialize a message variable (for success/error messages later)
    $message = '';

    // Create the uploads folder if not exists
    if (! file_exists($uploadDir)) {

        // Create the folder with read/write/execute permissions (0777)
        // 'true' allows creation of nested directories if needed
        mkdir($uploadDir, 0777, true);
        // mkdir stands for make directory it creates a new folder
        //077 sets the permission for the folder means everyone can read, write, and execute
    }

    // Check if the form was sent using POST and if a file was uploaded
    if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_FILES["file"])) {

        // Get the original name of the uploaded file (e.g., "myphoto.jpg")
        $fileName = $_FILES["file"]["name"];

        // Get the temporary path where PHP stored the uploaded file
        $fileTmp = $_FILES["file"]["tmp_name"];

        // Get the file size in bytes
        $fileSize = $_FILES["file"]["size"];

        // Get the upload error code (0 means no error)
        $fileError = $_FILES["file"]["error"];

        // Allowed file types
        // Create a list of file types we allow users to upload
        $allowedExt = ['jpg', 'jpeg', 'png', 'gif', 'pdf'];
        // Get the file extension from the uploaded file name (e.g., "photo.jpg" → "jpg")
        // Convert it to lowercase so checking is not case-sensitive (e.g., "JPG" → "jpg")
        $fileExt = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));

        // Validate
        if ($fileError !== 0) {
            // If there was a problem during upload
            $message = "Error uploading file!";
        } elseif (! in_array($fileExt, $allowedExt)) {
            // If the file type is not in the allowed list
            $message = "Only JPG, PNG, GIF, or PDF files allowed!";
        } elseif ($fileSize > 2 * 1024 * 1024) { // 2MB = 2 * 1024 * 1024 bytes
                                                     // If the file is too large
            $message = "File too large! Max 2MB.";
        } else {
            // Everything looks good! Let's save the file

            // Make a unique new file name like "upload_654f3ad0e12345.jpg"
            $newName = uniqid("upload_", true) . "." . $fileExt;
            //uniqid() makes a unique name for the file — so even if two users upload a file called “image.jpg,” they won’t overwrite each other’s file.

            // Create the full destination path (e.g., uploads/upload_654f3ad0e12345.jpg)
            $dest = $uploadDir . $newName;

            // Move the uploaded file from temp folder to uploads folder
            if (move_uploaded_file($fileTmp, $dest)) {
                $message = "File uploaded successfully!";
            } else {
                $message = "Failed to move uploaded file.";
            }
        }
    }

    // Get all uploaded files
    // scandir() = scans a folder and returns a list of everything inside it
    // array_diff() = removes unwanted items ('.' and '..') from that list
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
        <p class="message"><?php echo $message ?></p>
    <?php endif; ?>

    <h2>Uploaded Files:</h2>
    <div class="gallery">
        <?php foreach ($files as $f): ?>
            <?php if (preg_match('/\.(jpg|jpeg|png|gif)$/i', $f)): ?>
                <img src="<?php echo $uploadDir . $f ?>" alt="Uploaded image">
            <?php else: ?>
                <p><a href="<?php echo $uploadDir . $f ?>" target="_blank"><?php echo $f ?></a></p>
            <?php endif; ?>
        <?php endforeach; ?>
    </div>
</body>
</html>
