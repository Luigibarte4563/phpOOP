<?php

class hello{

    public $name;
    public $age;

    public function __contruct($name, $age){

        $this->name = $name;
        $this->age = $age;


        if($age >= 18){
            echo "you're are on legal age <br>";
        }else{
            echo "you are a minor {$age} <br>";
        }
    }    
}

$person = new hello("luigi", 19);

?>