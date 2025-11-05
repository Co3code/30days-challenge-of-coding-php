<?php
// Day 8: Mini Quiz App

//  Questions array (each question has options + correct answer)
$quiz = [
    [
        "question" => "What does PHP stand for?",
        "options" => [
            "A. Personal Home Page",
            "B. Private Hypertext Processor",
            "C. PHP: Hypertext Preprocessor",
            "D. Programming Home Project"
        ],
        "answer" => "C"
    ],
    [
        "question" => "Which symbol is used to declare a variable in PHP?",
        "options" => [
            "A. @",
            "B. $",
            "C. #",
            "D. %"
        ],
        "answer" => "B"
    ],
    [
        "question" => "Which function is used to output text in PHP?",
        "options" => [
            "A. print()",
            "B. echo",
            "C. write()",
            "D. say()"
        ],
        "answer" => "B"
    ]
];

//  Function to check answers and calculate score
function calculateScore($quiz, $answers) {
    $score = 0;
    for ($i = 0; $i < count($quiz); $i++) {
        if (strtoupper($answers[$i]) === $quiz[$i]["answer"]) {
            $score++;
        }
    }
    return $score;
}

//  Simulated user answers (you can change this to test)
$userAnswers = ["C", "B", "A"]; // Try changing values

//  Display quiz
echo "<h2>Mini PHP Quiz</h2>";

foreach ($quiz as $index => $q) {
    echo "<p><strong>Q" . ($index + 1) . ":</strong> " . $q["question"] . "</p>";
    foreach ($q["options"] as $option) {
        echo "$option<br>";
    }
    echo "<p><em>Your answer:</em> " . $userAnswers[$index] . "</p><hr>";
}

//  Calculate and display score
$totalQuestions = count($quiz);
$score = calculateScore($quiz, $userAnswers);

echo "<h3>Final Score: $score / $totalQuestions</h3>";

if ($score === $totalQuestions) {
    echo "<p>Perfect!  Excellent job!</p>";
} elseif ($score >= 2) {
    echo "<p>Good job!  Keep practicing!</p>";
} else {
    echo "<p>Needs improvement  Try again!</p>";
}
?>
