<?php
$db = new PDO("sqlite:database.sqlite");

// Create table automatically if not exists
//exec means “execute this SQL command.”(Execute = run)
$db->exec("
    CREATE TABLE IF NOT EXISTS students (
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        name TEXT NOT NULL,
        email TEXT NOT NULL
    );
");
//null means must have a value. It cannot be empty.
