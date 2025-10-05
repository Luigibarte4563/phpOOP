<?php

function my_custom_autoloader($class_name) {
    $file = __DIR__ . '/../autoLoad2/' . $class_name . '.php';

    try {
        if(file_exists($file)) {
            require_once $file;
        }else {
            throw new Exception("file '$file' not found");
        }
    }catch (Exception $e) {
        echo "Error: " . $e->getMessage();
    }

}

spl_autoload_register('my_custom_autoloader');

$me = new me();
$me->greet();