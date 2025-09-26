<?php

class studentGradecal
{
    private $attendance;
    private $assignment;
    private $quiz;
    private $exam;

    public function __construct($attendance, $assignment, $quiz, $exam)
    {
        $this->attendance = $attendance;
        $this->assignment = $assignment;
        $this->quiz = $quiz;
        $this->exam = $exam;
    }

    public function calculatorTotal() {
        return $this->attendance + $this->assignment + $this->quiz + $this->exam;
    }

    public function gradeResult() {
        
        $result = $this->calculatorTotal();

        if ($result >= 90 && $result <= 100) {
            return "A";
        } elseif ($result >= 80 && $result <= 89) {
            return "B";
        } elseif ($result >= 70 && $result <= 79) {
            return "C";
        } elseif ($result >= 60 && $result <= 69) {
            return "D";
        } elseif ($result < 60) {
            return "F";
        } else {
            return "error";
        }
    }

    public function displayResult() {
        echo "Attendance: {$this->attendance}<br>";
        echo "Assignment: {$this->assignment}<br>";
        echo "Quiz: {$this->quiz}<br>";
        echo "Exam: {$this->exam}<br>";
        echo "---------------------<br>";
        echo "Total Score: " . $this->calculatorTotal() . "<br>";
        echo "Grade: " . $this->gradeResult() . "<br>";
    }
}

$student1 = new studentGradecal(10, 30, 30, 30);
$student1->displayResult();
