<?php

class student2 {

    private $data = [];

    public function __set($name, $value) {
        echo "Setting '$name' to '$value' <br>";
        $this->data[$name] = $value;
    }

    public function __get($name) {
        echo "Getting '$name' value... <br>";
        return $this->data[$name] ?? "Property '$name' not found!";
    }
}

$teacher = new student2();

$teacher->name = "int";
$teacher->value = "this";
echo $teacher->value;