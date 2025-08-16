<?php
class student{

    private $name;
    private $age;

    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    public function getInfo() {
        return "name: {$this->name},<br> Age {$this->age}";
    }
}

class StudentT extends student{

    private $studentID;

    public function __construct($name, $age, $studentID) {
        parent::__construct($name, $age);
        $this->studentID = $studentID;

    }

    public function getStudentInfo(){
        return $this->getInfo() . "<br>, student ID: {$this->studentID}";
    }
}

$student = new studentT("luigi", 19, "24-06554");

echo $student->getStudentInfo();
?>