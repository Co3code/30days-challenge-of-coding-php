<?php

    echo "<h2>Array Functions</h2>";

    echo "<h3>Arrays - Organized Data Collections</h3>";

    //functio to calculate grades

    function calculateGrade($score)
    {
        if ($score >= 90) {
            return "A";
        } elseif ($score >= 80) {
            return "B";
        } elseif ($score >= 70) {
            return "C";
        } else {
            return "f";
        }
    }

    //array of students with scores
    $students = [
        ["name" => "anthony", "score" => 95],
        ["name" => "lian", "score" => 86],
        ["name" => "kent", "score" => 68],
        ["name" => "xam", "score" => 88],
    ];

    // display student grades using function
    echo "<table border='1' cellpadding='5'>";
    echo "<tr>
        <th>Student Name</th>
        <th>Score</th>
        <th>Grade</th>
    </tr>";

    foreach ($students as $student) {
        $grade = calculateGrade($student["score"]);
        echo "<tr>";
        echo "<td>" . $student["name"] . "</td>";
        echo "<td>" . $student["score"] . "</td>";
        echo "<td>" . $grade . "</td";
        echo "</tr>";

    }

    echo " </table>";

    $student_name  = $_POST['student_name'];
    $student_score = $_POST['student_score'];
    $student_grade = $_POST['student_grade'];

?>

<form action="POST" style=" margin-top:20px;">
    <h4>add new Student:</h4>
    <label for="">student Name</label><br>
    <input type="text" name="student_name" required> <br><br>


    <label for="">students score (0-100):</label><br>
    <input type="number" name="student_score"required> <br><br>

   <button type="submit" name="add_score">add student</button>



</form>
