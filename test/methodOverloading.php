<?php
class Demo {
    public function __call($name, $arguments)
    {
        echo "Calling instance method '$name' with arguments: ";
        print_r($arguments);
        echo "<br>";
    }

    public static function __callStatic($name, $arguments)
    {
        echo "calling static method '$name' with arguments: ";
        print_r($arguments);
        echo "<br>";
    }
}

$obj = new Demo();

$obj->sayHello("Alice", 25);

$obj->calculate(10, 20);

Demo::greet("Bob");

Demo::add(5, 15);
