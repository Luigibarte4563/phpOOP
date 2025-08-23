<?php

class unset1 {
    private $data = [];

    public function __set($name, $value) {
        $this->data[$name] = $value;
    }

    public function __get($name) {
        return $this->data[$name] ?? "Propery '$name' not found!";
    }

    public function __isset($name) {
        return isset($this->data[$name]);
    }

    public function __unset($name) {
        if(isset($this->data[$name])) {
            unset($this->data[$name]);
            echo "Property '$name' has been unset. <br>";
        } else {
            echo "Property '$name' not found, cannot unset. <br>";
        }
    }
}

$unset = new unset1();

$unset->name = "luigi";
$unset->age = 19;

echo $unset->name . "<br>";

unset($unset->name);
echo $unset->name . "<br>";