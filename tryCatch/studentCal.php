<?php

function calculator($scores) {
    $average = array_sum($scores) / count($scores);

    if($average >= 90) return "A";
    if ($average >= 80) return "B";
    if ($average >= 70) return "C";
    if ($average >= 60) return "D";
    return "F";
}

try {
    $name = "Luigi";
    
    $scores = [95, 87, 90, 85, 102];

    foreach ($scores as $score) {
        if(!is_numeric($scores)) {
            throw new Exception("Invalid input: $score is not a number.");
        }
        if($score < 0   || $score > 100) {
            throw new Exception("Invalid score: $score must be between 0 and 100.");
        }
    }

    $grade = calculateGrade($scores);
    $average = array_sum($scores) / count($scores);

    echo "Student: $name\n";
    echo "Scores: " . implode(", ", $scores) . "\n";
    echo "Average: $average\n";
    echo "Grade: $grade\n";
} catch  (Exception $e) {
    echo "Error: " . $e->getMessage();
}finally  {
    echo "\n Program finish.";
}


?>

