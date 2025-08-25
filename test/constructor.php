<?php

class constructor {

    public $title;
    public $price;

    function __construct($param1 = "PHP Basics", $param2 = 380) {
        echo $this->title = $param1 . "<br>";
        echo $this->price = $param2 . "<br>";

    }
}

$b1 = new constructor();
$b2 = new constructor("PHP Programming", 450);
$b3 = new constructor("Programming", 100);