<?php 
session_start();
//check session
if(!isset($_SESSION["username"])){
    //try auto login via cookie
    if(isset($_COOKIE["remembe_user"])){
        $_SESSION["username"] =$_COOKIE["remember_user"];
    }else{
        header("location: login.php");
        exit();
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dashboard</title>
</head>
<body>
    <h2>Welcome, <?php htmlspecialchars($_SESSION["usernmae"]); ?>!</h2>
    <p>You are now login in using SESSION <?php echo " (or Cookie if auto-logged )"; ?>.</p>

    <a href="logout.php">logout</a>
    
</body>
</html>