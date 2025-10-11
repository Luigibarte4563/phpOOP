<?php

class Address {
    private $street;
    private $city;

    public function __construct($street, $city) {
        $this->street = $street;
        $this->city = $city;
    }

    public function getFullAddress() {
        return $this->street . ", " . $this->city . "<br.";
    }
}

class Person {
    private $name;
    private $age;
    private $address;

    public function __construct($name, $age, Address $address) {
        $this->name = $name;
        $this->age = $age;
        $this->address = $address;
    }

    public function getFullAddress() {
        return "Name: {$this->name} <br>
                Age: {$this->age} <br>" .
                "Address: " . $this->address->getFullAddress() . "<br";
    }
}

$address = new Address("123 Street", "Ciyy");
$per = new Person("Luigi", 20, $address);

echo $per->getFullAddress();