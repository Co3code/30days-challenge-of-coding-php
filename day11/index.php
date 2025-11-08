

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Day 11 - File Handling (Saving Form Data)</title>
</head>
<body>
    <h1>Save Form Data to File</h1>

    <form method="POST" action="save_data.php">
        <label>Name:</label><br>
        <input type="text" name="name" required><br><br>

        <label>Email:</label><br>
        <input type="email" name="email" required><br><br>

        <label>Message:</label><br>
        <textarea name="message" required></textarea><br><br>

        <button type="submit">Save Data</button>
    </form>
</body>
</html>
