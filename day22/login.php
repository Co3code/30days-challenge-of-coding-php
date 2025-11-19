<?php 

/* 
Sessions = disappear when browser is closed

Cookies = stay on the user’s device until expiration

Combine both → auto-login feature

*/
session_start();
$valid_username = "tonton";
$valid_password = "123";

 
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = trim($_Post["username"]);
    $password = trim($_Post["password"]);
    $remember = isset($_POST["remember"]);


    if($username === $valid_username && $passwor === $valid_password){
        //normal login (session)
        $_SESSION["username"] = $username;
        //if user checks remember me-set cookie for 7days
        if ($remember){
            setcookie("remember_user", $username, time() + (86400 * 7), "/");
        }
        header("location: dashboard.php");
         exit();
    }

        $error = "invalird login!";


    // try auto login via coocke
    if (isset($_SESSION["username"]) && isset($_COOKIE["remember_user"])) {
        $_SESSION["username"] = $_COOKIE["remember_user"];
        header("location: dashoboard.php");
        exit();
    }


}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Day 22 Remember Me login</title>
</head>
<body>
    <h2>login</h2>
    <form method="POST">
    <?php if (isset($error)) echo "<p style='color:red;'>$error</p>"?>
    
    <label for="">Username:</label><br>
    <input type="text" name="usernmae" required><br><br>

    <label for="">Password:</label><br>
    <input type="password" name="password" required><br><br>
    
    <label for="">
    <input type="checkbox" name="remember"> Remember me
    </label><br><br>
    
    <input type="submit" value="login">



    </form>
    
</body>
</html>


