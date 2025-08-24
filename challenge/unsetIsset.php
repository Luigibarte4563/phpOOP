<?php

class teacher {
    private $data = [];

    public function __set($name, $value) {
        echo "Setting '$name' to '$value' <br>";
        $this->data[$name] = $value; 
    }

    public function __get($name) {
        echo "Getting '$name' value... <br>";
        return $this->data[$name] ?? "Property not found!";
    }

    public function __isset($name) {
        return isset($this->data[$name]);
    }

    public function __unset($name) {
        unset($this->data[$name]);
    }
}

$sir = new teacher();

$sir->name = "luigi";
$sir->age = 19;

echo isset($sir->name) ? "Name exists <br>" : "Name does not exist <br>";

unset($sir->age);

echo isset($sir->age) ? "Age exists <br>" : "Age does not exist <br>";