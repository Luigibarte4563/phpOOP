<?php

class master {
    
    public function __set($name, $value) {
        echo "setting the '$name' to '$value' <br>";
        $this->$name = $value;
    }

    public function __get($name) {
        return $this->name ?? "Property not found!";
    }

    public function __isset($name) {
        return isset($this->name);
    }

    public function __unset($name) {
        unset($this->name);
    }
}

$master = new master();

$master->name = "luigi";

echo $master->name . "<br>";
echo isset($master->name) ? "property exists <br>" : "property not exist <br>";

unset($master->name);

echo isset($master->name) ? "property exists <br>" : "property not exist <br>";

