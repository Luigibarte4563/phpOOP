<?php 

class Car {

    public $make;
    public $model;
    public $year;

    public function __construct($make, $model, $year) {
        $this->make = $make;
        $this->model = $model;
        $this->model = $year;
    }

    public function displayInfo() {
        echo "This car is a {$this->year} {$this->make} {$this->model}.";
    }
}

$myCar = new Car("Toyota", "Corolla", 2020);
$myCar->displayInfo();