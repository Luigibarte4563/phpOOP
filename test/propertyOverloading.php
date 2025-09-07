<?php
    class Student {

        private $data = [];

        public function __set($name, $value) {
            echo "setting the '$name' to '$value' <br>";
            $this->data[$name] = $value;
        }

        public function __get($name) {
            echo "getting the '$name' ";
            return $this->data[$name] ?? "property not found! <br>";
        }

        public function __isset($name) {
            echo "is '$name' set? <br>";
            return isset($this->data[$name]);
        }

        public function __unset($name) {
            echo "unsetting '$name' <br> ";
            unset($this->data[$name]);
        }
    }

    $student = new Student();

    $student->name = "Luigi";
    $student->age = 19;

    echo "Student Name: " . $student->name . "<br>";
    echo "Age         : " . $student->age . "<br>";

    echo isset($student->name) ? "name is set <br>" : "name is not set <br>";

    unset($student->age);

    echo isset($student->age) ? "name is set <br>" : "name is not set <br>";