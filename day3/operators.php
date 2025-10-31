<?php
// just making example of conditional statements
$score = 90;

if ($score >= 90) {
    // Output if score is 90 or higher
    echo "Excellent!";
} elseif ($score >= 75) {
    // Output if score is between 75 and 89
    echo "Passed";
} else {
    // Output if score is below 75
    echo "Failed";
}
