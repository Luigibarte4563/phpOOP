<?php
class practice{

    private $name;
    private $age;

    public function setName($name){
        $this->name = $name;
    }

    public function getName(){
        return $this->name;
    }
}

$person = new practice();

$person->setName("luigi");
echo "student name : {$person->getName()}";

?>