<?php
$day = "Monday"; // Define the current day

switch ($day) { // Check what day it is
    case "Monday":
        // If it's Monday, we know the week is just starting
        echo "Start of the week!";
        break; // Exit the switch block after finding a match
    case "Friday":
        // If it's Friday, you're almost there—weekend vibes
        echo "Weekend is near!";
        break; // Stop further checks once the match is found
    case "Sunday":
        // Sunday = rest day, take it easy
        echo "Rest day!";
        break; // Exit after this case
    default:
        // If it's none of the above days, it's just a regular day
        echo "Just another day.";
}
//use switch when you’recheckingonevariableagainstmanyoptions .
