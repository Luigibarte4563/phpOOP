<?php

class overloading {
    public function __set($name, $value) {
        echo "setting $name property to $value <br>";
        $this->$name = $value;
    }

    public function __get($name) {
        echo "value of $name property is ";
        return $this->$name;
    }
}

$obj = new overloading();

$obj->myproperty="Hello World!";

echo "Retrieving myproperty : " . $obj->yproperty . PHP_EOL;

?>