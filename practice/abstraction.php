<?php
    abstract class Animal {
        abstract function makeSound();

        public function sleep() {
            echo "sleeping <br>";
        }
    }

    class Dog extends Animal {
        public function makeSound() {
            echo "arf arf <br>";
        }
    }

    class Cat extends Animal {
        public function makeSound() {
            echo "meow <br>";
        }
    }

    $dog = new Dog();
    $dog->makeSound();
    $dog->sleep();

    $cat = new Cat();
    $cat->makeSound();
    $cat->sleep();