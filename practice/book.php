<?php

class Book {
    
    var $price;
    var $title;

    function __construct() {
        $this->title = "PHP Fundamentals";
        $this->price = 275;
    }

    function get_price() {
        echo "Price: $this->price <br>";
    }

    function getTitle() {
        echo "Title: $this->title <br>";
    }
}

$b1 = new Book();
$b1->getTitle();
$b1->get_price();