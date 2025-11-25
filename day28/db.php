<?php
// db.php
$dsn = "sqlite:users.db";

try {
    $pdo = new PDO($dsn);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Auto-create table if not exist
    $pdo->exec("
        CREATE TABLE IF NOT EXISTS users (
            id INTEGER PRIMARY KEY AUTOINCREMENT,
            username TEXT UNIQUE,
            password TEXT,
            fullname TEXT
        );
    ");

    // Insert default test user if table empty
    $count = $pdo->query("SELECT COUNT(*) FROM users")->fetchColumn();
    if ($count == 0) {
        $stmt = $pdo->prepare("INSERT INTO users (username, password, fullname) VALUES (?, ?, ?)");
        $stmt->execute([
            "admin",
            password_hash("1234", PASSWORD_DEFAULT),
            "Anthony Co"
        ]);
    }

} catch (Exception $e) {
    die("DB error: " . $e->getMessage());
}
