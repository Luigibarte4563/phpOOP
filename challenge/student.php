<?php 

class Student {
    private $data = [];

    public function __set($name, $value) {
        if($name == "grade"){
            if($value >= 0 && $value <= 100) {
                $this->data[$name] = $value;
            }else {
                echo "Should restrict to valid range (0-100) <br>";
            }
        }elseif($name == "age") {
            if(is_numeric($value)) {
                $this->data[$name] = $value;
            } else {
                echo "Age must be a number <br>";
            }
        }else {
            $this->data[$name] = $value;
        }
    
    }

    public function __get($name) {
        return $this->data[$name] ?? "Property '$name' not found!";
    }

}

$student = new Student();

$student->name = "Luigi";
$student->age = 19;
$student->course = "BS Information Technology";
$student->grade = 95;
$student->school = "UDD";
$student->subject = 10;

echo "Your name is " . $student->name . "<br>";
echo $student->age . "<br>";
echo $student->course . "<br>";
echo $student->grade . "<br>";
echo $student->school . "<br>";
echo $student->subject . "<br>";

?>
