<?php 

class Book {

    public $title;
    public $author;
    public $isbn;   
    public $available;

    public function __construct($title, $author, $isbn, $available) {
        $this->title = $title;
        $this->author = $author;
        $this->isbn = $isbn;
        $this->available = $available;
    }

    public function displayInfo() {
        echo "Title: " . $this->title . " | ";
        echo "Author: " . $this->author . " | ";
        echo "ISBN: " . $this->isbn . " | ";

        if($this->available) {
            echo "Available: Yes <br>"; 
        }else {
            echo "Available: No <br>";
        }
    }

    public function borrowBook() {
        if(!$this->available) {
            echo "Available: No <br>";
        }
    }

    public function returnBook(){
        if($this->available) {
            echo "Available: Yes <br>"; 
        }
    }
}

$b1 = new Book("1994", "George Orwell", 123456789, true);
$b1->displayInfo();

$b2 = new Book("The Hobbit", "J.R.R. Tolkien", 987654321, true);
$b2->displayInfo();

$b3 = new Book("To Kill a Mockingbird", "Harper Lee", 456789123, true);
$b3->displayInfo();

//$b1->borrowBook();
