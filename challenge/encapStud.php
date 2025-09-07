<?php

use student as GlobalStudent;

    class Student {
        
        private $name;
        private $age;

        public function setName($name) {
            $this->name = $name;
        }

        public function getName() {
            return $this->name;
        }

        public function setAge($age) {
            $this->age = $age;
        }

        public function getAge() {
            return $this->age;
        }
    }

    $student = new Student();
    $student->setName("Luigi <br>");
    $student->setAge(19);

    echo $student->getName();
    echo $student->getAge();