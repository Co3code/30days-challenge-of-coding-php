<?php
// Day 8: Mini Quiz App

//  Questions array (each question has options + correct answer)
$quiz = [
    [
        "question" => "What does PHP stand for?",
        "options"  => [
            "A. Personal Home Page",
            "B. Private Hypertext Processor",
            "C. PHP: Hypertext Preprocessor",
            "D. Programming Home Project",
        ],
        "answer"   => "C", // Correct answer is "C"
    ],
    [
        "question" => "Which symbol is used to declare a variable in PHP?",
        "options"  => [
            "A. @",
            "B. $",
            "C. #",
            "D. %",
        ],
        "answer"   => "B", // Correct answer is "B"
    ],
    [
        "question" => "Which function is used to output text in PHP?",
        "options"  => [
            "A. print()",
            "B. echo",
            "C. write()",
            "D. say()",
        ],
        "answer"   => "B", // Correct answer is "B"
    ],
];

// Function to check answers and calculate score
function calculateScore($quiz, $answers)
{
    $score = 0; // Initialize score to 0

    // Loop through each question in the quiz
    for ($i = 0; $i < count($quiz); $i++) {
        // Check if the user's answer matches the correct answer for this question
        if (strtoupper($answers[$i]) === $quiz[$i]["answer"]) {
            $score++; // Increment score for each correct answer
        }
    }

    return $score; // Return the total score
}

/**
 * Explanation of the code:
 *
 * 1. The $quiz array contains the questions, options, and the correct answer.
 * 2. The calculateScore function accepts two parameters:
 *    - $quiz: the array of questions and answers.
 *    - $answers: the user's answers.
 * 3. Inside the function:
 *    - We loop through each question in the quiz using a for loop.
 *    - For each question, we check if the user's answer matches the correct answer (case-insensitive comparison).
 *    - If the answer is correct, we increment the score.
 * 4. The function returns the total score at the end.
 *
 * Example:
 * If the user answers all questions correctly, the score will be 3.
 */

/**
 * Quick Summary:
 *
 * $i = 0: Start counting from 0 (first question).
 *
 * $i++: Add 1 to $i after each question, moving to the next one.
 *
 * count($quiz): This tells how many questions are in the quiz.
 *
 * strtoupper($answers[$i]): Makes the user’s answer uppercase before checking it.
 *
 * $score++: Adds 1 to the score if the answer is correct.
 *
 * return $score: After all the questions, we return the final score.
 */

// Handle form submission
// Part 1: Handling Form Submission (if ($_SERVER["REQUEST_METHOD"] == "POST"))
// This part of the code happens after the form is submitted (when the user clicks the "Submit Quiz" button).
// $_SERVER["REQUEST_METHOD"]: This checks if the form was submitted using the POST method (which is the usual way forms send data securely).

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect answers from the form submission
    $userAnswers = $_POST['answers'];
    /* 
    $_POST['answers']: This gets all the answers that the user selected from the form.
    The answers come from the radio buttons where the user picks options. 
    The $_POST array holds the submitted form data, and answers is the name of the array that holds each answer.
    Each answer corresponds to the choices the user made. 
    So, $userAnswers is an array where each element is the answer for a specific question (like "C", "B", etc.).
    */

    // Calculate the score
    $totalQuestions = count($quiz);
    $score          = calculateScore($quiz, $userAnswers);
    /* 
    count($quiz): This gets the total number of questions in the quiz. 
    We use this to know how many questions the user answered, and to display the final score.
    calculateScore($quiz, $userAnswers): This calls the function calculateScore() (which we looked at earlier) to check the answers and calculate how many are correct.
    */

    // Display results
    echo "<h2>Mini PHP Quiz - Results</h2>";
    foreach ($quiz as $index => $q) {
        echo "<p><strong>Q" . ($index + 1) . ":</strong> " . $q["question"] . "</p>";
        foreach ($q["options"] as $option) {
            echo "$option<br>";
        }
        echo "<p><em>Your answer:</em> " . $userAnswers[$index] . "</p><hr>";
    }
    /* 
    foreach ($quiz as $index => $q): This loop goes through each question in the quiz.
    $index is the position of the question (0, 1, 2, etc.).
    $q is the whole question object (including the question text and options).
    $q["question"]: Displays the actual question text.
    $q["options"]: Loops through each option for the current question and displays them.
    $userAnswers[$index]: Displays the user’s answer for the current question.
    This will show each question, its options, and the answer the user selected.
    */

    // Display Final Score
    echo "<h3>Final Score: $score / $totalQuestions</h3>";
    // This displays the total score the user got, like “3 out of 3”.

    if ($score === $totalQuestions) {
        echo "<p>Perfect!  Excellent job!</p>";
    } elseif ($score >= 2) {
        echo "<p>Good job!  Keep practicing!</p>";
    } else {
        echo "<p>Needs improvement  Try again!</p>";
    }
    /*
    This checks if the user got all the answers correct ($score === $totalQuestions), and displays a special message:
    If the score is the same as the total number of questions, the user did perfectly!
    If the score is at least 2, they did well.
    If the score is less than 2, they need a little more practice.
    */
} else {
    // Display the quiz form if no answers are submitted
    echo "<h2>Mini PHP Quiz</h2>";
    echo '<form method="POST">';
    foreach ($quiz as $index => $q) {
        echo "<p><strong>Q" . ($index + 1) . ":</strong> " . $q["question"] . "</p>";
        foreach ($q["options"] as $option) {
            echo '<label><input type="radio" name="answers[' . $index . ']" value="' . substr($option, 0, 1) . '"> ' . $option . '</label><br>';
        }
    }
    echo '<br><input type="submit" value="Submit Quiz">';
    echo '</form>';
}
/* 
<form method="POST">: This creates a form where users can select their answers. The form will send data to the server when submitted, using the POST method.
foreach ($quiz as $index => $q): This loop goes through each question and displays it with its options.
name="answers[$index]": This creates a set of radio buttons for each question. The user can only choose one option for each question. 
The radio button's value is set to the first letter of the answer (for example, "A", "B", etc.).
<input type="submit" value="Submit Quiz">: This is the "Submit Quiz" button that the user clicks to submit their answers.
This part shows the quiz when the user first visits the page or if they haven’t submitted their answers yet.
*/
