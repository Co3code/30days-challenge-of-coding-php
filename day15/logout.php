<?php
// day15/logout.php
session_start();
session_unset();   // removes all session variables
session_destroy(); // destroys the session
header("Location: index.php");
exit;
