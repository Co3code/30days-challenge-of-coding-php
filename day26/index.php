<!DOCTYPE html>

<html>
<head>
    <title>Day 26 – Send Email</title>
</head>
<body>
    <h2>Day 26: Sending Email with PHPMailer</h2>

    <form action="send.php" method="POST">
        <label>Email To:</label><br>
        <input type="email" name="email" required><br><br>

        <label>Subject:</label><br>
        <input type="text" name="subject" required><br><br>

        <label>Message:</label><br>
        <textarea name="message" rows="5" required></textarea><br><br>

        <button type="submit">Send Email</button>
    </form>
</body>
</html>
