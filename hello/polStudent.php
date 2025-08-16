<?php
class Animal{
    public function makeSound(){
        return "some generic sound";
    }
}

class Dog extends Animal{
    public function makeSound(){
        return "woof woof";
    }
}

class Cat extends Animal{
    public function makeSound(){
        return "meow meow ";
    }
}

$animals = [new Dog(), new Cat(), new Animal()];

foreach($animals as $animal){
    echo $animal->makeSound() . "<br>";
}
?>
