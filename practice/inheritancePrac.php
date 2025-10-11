<?php  

class Person {
    private $name;
    private $age;

    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    public function getName() {
        return $this->name;
    }

    public function getAge() {
        return $this->age;
    }
}

class child extends Person {
    private $nickName;

    public function __construct($name, $age, $nickName) {
        parent:: __construct($name, $age);
        $this->nickName = $nickName;
    }

    public function getInfo() {
        return "your name is: " . $this->getName() . "<br>" .
                "your age is : " . $this->getAge() . "<br>" .
                "your nickName is: $this->nickName <br>";
    }
}

$child = new child("luigi", 20, "ugiw");
echo $child->getInfo();