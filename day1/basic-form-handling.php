<?php
// SIMPLE FORM PROCESSOR
if ($_POST) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    
    echo "<h2>Form Received!</h2>";
    echo "Username: " . $username . "<br>";
    echo "Email: " . $email;
} else {
    // Show the form if no data submitted
    ?>
    <form method="POST">
        <input type="text" name="username" placeholder="Enter username">
        <input type="email" name="email" placeholder="Enter email">
        <button type="submit">Submit</button>
    </form>
    <?php
}
?>