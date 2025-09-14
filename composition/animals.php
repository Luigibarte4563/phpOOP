<?php

class Animal {
    function eat() {
        echo "Eating... <br>";
    }
}

class Walkable {
    function walk () {
        echo "Walking... <br>";
    }
}

class Swimmable {
    function swim() {
        echo "Swimming... <br>";
    }
}

class Flyable {
    function fly() {
        echo "Flying... <br>";
    }
}

class Fish {
    var $animal;
    var $swimmable;

    function __construct() {
        $this->animal = new Animal();
        $this->swimmable = new Swimmable();
    }
}

$ani = new Fish();
$ani->animal->eat();
$ani->swimmable->swim();