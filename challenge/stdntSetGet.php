<?php

    class teacher { 
        private $data = [];

        public function __set($key, $value) {
            // echo "Setting '$key' To '$value' <br>";
            $this->data[$key] = $value;
        }

        public function __get($key) {
            return $this->data[$key] ?? "Property '$key' not found! <br>";
        }
    }

    $jud = new teacher();

    $jud->name = "lui <br>";
    $jud->grade = 95 . "<br>";

    echo $jud->name . PHP_EOL;
    echo $jud->grade . PHP_EOL;
    echo $jud->age . PHP_EOL;
