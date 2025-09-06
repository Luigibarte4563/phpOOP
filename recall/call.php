<?php 
    class call {
        public function __call($name, $arguments) {
            echo "calling instance method '$name' with arguments: ";
            print_r($arguments);
            echo "<br>"; 
        }

        public static function __callStatic($name, $arguments) {
            echo "Calling static method '$name' with arguments: ";
            print_r($arguments);
            echo "<br>";
        }
    }

    $obj = new call();

    $obj->greet("luigi", 21);

    $obj->sum(10, 10, 10);

    call::sayHello("World");

    call::multiply(5, 6);

    