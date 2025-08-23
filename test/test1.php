<?php

class test1 {
    private $data = [];

    public function __set($name, $value) {
        $this->data[$name] = $value;
    }

    public function __get($name) {
        return $this->data[$name] ?? "'$name' not found!";
    }

    public function __isset($name) {
        return isset($this->data[$name]);
    }
}

$teacher = new test1();

$teacher->name = "luigi";
$teacher->age = 19;


echo isset($teacher->name) ? "Name is set" : "Name is not set";
echo "<br>";
echo isset($teacher->grade) ? "Grade os set" : "Grade is not set";