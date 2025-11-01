<?php
// Day 4: Loops (for, while, foreach)

// --- While loop ---
echo "<h3>While Loop: Counting from 1 to 5</h3>";
$count = 1;
while ($count <= 5) {
  echo "Count: $count <br>";
  $count++;
}

// --- Do While loop ---
echo "<h3>Do While Loop: Counting from 1 to 3</h3>";
$num = 1;
do {
  echo "Number: $num <br>";
  $num++;
} while ($num <= 3);

// --- For loop ---
echo "<h3>For Loop: Multiplication Table of 2</h3>";
for ($i = 1; $i <= 10; $i++) {
  echo "2 x $i = " . (2 * $i) . "<br>";
}

// --- Foreach loop ---
echo "<h3>Foreach Loop: Subject List</h3>";
$subjects = ["PHP", "HTML", "CSS", "JavaScript"];
foreach ($subjects as $subject) {
  echo "Subject: $subject <br>";
}
//Run it inVSCodeterminal php - S localhost: 8080 - t day04;
?>
