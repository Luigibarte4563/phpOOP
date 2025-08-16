<?php

use student as GlobalStudent;

abstract class person{

    protected $name;
    protected $age;


    public function __construct($name, $age){
        $this->name = $name;
        $this->age = $age;
    }

    abstract public function getRole();

    public function getInfo(){
        return "Name : {$this->name}, Age : {$this->age} <br>";
    }
}

class Student extends person{
    private $studentID;

    public function __construct($name, $age, $StudentID){
        
        parent::__construct($name, $age);
        $this->studentID = $StudentID;
    }

    public function getRole(){
        return "Student ID: {$this->studentID}";
    }
}

class teacher extends  person{

    private $subject;

    public function __construct($name, $age, $subject){
        parent::__construct($name, $age);
        $this->subject = $subject;
    }

    public function getRole(){
        return "teacher, subject: {$this->subject}";
    }
}

$student = new Student("luigi", 19, "101010");
$teacher = new teacher("jelson", 25, "OOP");

echo "{$student->getRole()} {$student->getInfo()}";
echo "{$teacher->getRole()}";



?>