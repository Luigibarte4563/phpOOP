<?php

$totalQuestions = readline("Enter total number of questions: ");

$correctAnswers = readline("Enter number of correct answer: ");

$totalQuestions = 10;
$correctAnswers = 9;

$percentage = ($correctAnswers / $totalQuestions) * 100;

if ($percentage >= 90) {
    $grade = "A";
} elseif ($percentage >= 80) {
    $grade = "B";
} elseif ($percentage >= 70) {
    $grade = "C";
} elseif ($percentage >= 60) {
    $grade = "D";
} else {
    $grade = "F";
}

echo "\nScore: " . round($percentage) . "%\n";
echo "Grade: " . $grade . "\n";

?>