<?php
$db = new PDO("sqlite:database.sqlite");

// Create table automatically if not exists
$db->exec("
    CREATE TABLE IF NOT EXISTS students (
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        name TEXT NOT NULL,
        email TEXT NOT NULL
    );
");
