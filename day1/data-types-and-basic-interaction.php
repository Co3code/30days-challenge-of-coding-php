can u add commit where to delete code here or change so i can spot so i can know soon to debug when i incounter this<?php

    echo "<hr><h3>📊 PHP DATA TYPES</h3>";

    // EXPLANATION: Data Types
    //  PURPOSE: Different kinds of data behave differently
    //  WHEN TO USE: Understanding how PHP handles various information

    // STRING - Text data
    $name = "Co3code";
    echo " STRING: " . $name . "<br>";

    // INTEGER - Whole numbers
    $age = 20;
    echo " INTEGER: " . $age . "<br>";

    // FLOAT - Decimal numbers
    $price = 19.99;
    echo " FLOAT: " . $price . "<br>";

    // BOOLEAN - True/False
    $is_online  = true;
    $is_offline = false;

    //ternary operator
    //? is like if — it checks if the condition is true.
    //: is like else — it provides the value to use if the condition is false.
    echo " BOOLEAN True: " . ($is_online ? "True" : "False") . "<br>";
    echo " BOOLEAN False: " . ($is_offline ? "true" : "false") . "<br>";

    // NULL - Empty value
    $empty_var = null;
    // echo " NULL: " . $empty_var . "<br>";
    echo " NULL: " . ($empty_var === null ? "no value" : $empty_var) . " <br>";

    // ARRAY - Multiple values in one variable
    $colors = ["Red", "Green", "Blue"];
    echo " ARRAY: ";
    print_r($colors);
    echo "<br>";

    echo "<hr><h3> TYPE CHECKING</h3>";

    //  EXPLANATION: Checking variable types
    //  PURPOSE: Verify what kind of data you're working with
    //  WHEN TO USE: Debugging and validation

    echo "Name is string: " . gettype($name) . "<br>";
    echo "Age is integer: " . gettype($age) . "<br>";
    echo "Price is float: " . gettype($price) . "<br>";
    echo "Online status is boolean: " . gettype($is_online) . "<br>";

    echo "<hr><h3>BASIC FORM INTERACTION</h3>";
    //  EXPLANATION: Getting user input
    //  PURPOSE: Make PHP interactive with forms
    //  WHEN TO USE: Contact forms, login systems, surveys

    if (isset($_POST['submit'])) {
        // User submitted the form
        $user_name  = htmlspecialchars($_POST['user_name']);
        $user_color = htmlspecialchars($_POST['favorite_color']);

        echo "<div id='successMessage' style='background: lightgreen; padding: 10px;'>";
        echo "🎉 FORM SUBMITTED!<br>";
        echo "Hello, " . $user_name . "!<br>";
        echo "Your favorite color is: " . $user_color;
        echo "</div>";
        // to hide the success message after 5 seconds
        echo "<script>
            setTimeout(function() {
                document.getElementById('successMessage').style.display = 'none';
            }, 5000); // 5000 milliseconds = 5 seconds
          </script>";

        //show the form again after submission(for re-submission)
        echo " <br><h4> submit another form:</h4>";
    }

?>
    <form method="POST">
        <h4>Tell me about yourself:</h4>

        <label>Your Name:</label><br>
        <input type="text" name="user_name" required>
        <br><br>

        <label>Favorite Color:</label><br>
        <select name="favorite_color">
            <option value="Red">🔴 Red</option>
            <option value="Green">🟢 Green</option>
            <option value="Blue">🔵 Blue</option>
        </select>
        <br><br>

        <button type="submit" name="submit">Submit Info</button>
    </form>


    <?php
        echo " <hr><h3>CONTROL STRUCTURES - MAKING DECISION</h3>";

        $temperature = 25;
        if ($temperature > 30) {
            echo "it's hot outside";
        }
        // IF - ELSE STATEMENT
        if ($temperature > 30) {
            echo "🔥 It's hot outside!<br>";
        } else {
            echo "😊 Temperature is comfortable<br>";
        }

    ?>

