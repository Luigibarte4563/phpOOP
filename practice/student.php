<?php

class Student {

    private $data = [];

    public function __set($name, $value) {
        echo "Settings '$name' to '$value' <br>";
        $this->data[$name] = $value;
    }

    public function __get($name) {
        echo "Getting '$name' value... <br>";
        return $this->data[$name] ?? "Property '$name' not found!";
    }

}

$student = new Student();

$student->name = "age";
$student->value = 22;
echo $student->name;
echo $student->address;