<?php
/*
=============================================
   PHP Foreach Loop Example
=============================================
The FOREACH loop is perfect for iterating 
through arrays or lists.
---------------------------------------------
Syntax:
foreach ($array as $value) {
    // code to execute
}
---------------------------------------------
*/

// --- Foreach Loop: Subject List ---
echo "<h3>Foreach Loop: Subject List</h3>";

// Array of subjects
$subjects = ["PHP", "HTML", "CSS", "JavaScript"];

// Loop through each subject
foreach ($subjects as $subject) {
    echo "Subject: $subject <br>";
}

/*
Explanation:
$subjects = the array we are looping through
$subject  = variable that takes the value of each element during each loop

Inside the loop, we echo each $subject with a line break.
Conventionally:
$subjects → many subjects (the array)
$subject  → one subject at a time (current element)
*/
