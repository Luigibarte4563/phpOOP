<?php

class Config {
    private $data = [];

    public function __set($key, $value) {
        echo "'$key' to '$value' <br>";
        $this->data[$key] = $value;
    }

    public function __get($key) {
        return $this->data[$key] ?? "property not found";
    }
}

$config = new Config();

$config->key = "library";
$config->value = "that";

echo $config->key;