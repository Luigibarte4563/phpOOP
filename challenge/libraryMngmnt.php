<?php
class Book {
    public $title;
    public $author;
    public $isbn;
    public $available;

    public function __construct($title, $author, $isbn, $available = true) {
        $this->title = $title;
        $this->author = $author;
        $this->isbn = $isbn;
        $this->available = $available;
    }

    public function getInfo() {
        return "Title: " . $this->title . "<br>" . "Author: " . $this->author . "<br>" . "Book Number: " . "<br>";
    }

    public function borrowBook() {
        if(!$this->available) {
            return "Book already borrowed <br>";
        }
    }

    public function returnBook() {
        if($this->available) {
            return "The book is available <br>";
        }
    }
}

class User {
    public $name;
    public $borrowedBooks = [];

    public function __construct($name) {
        $this->name = $name;
    }

    public function borrow(Book $book) {
        if($book->available) {
            $this->borrowedBooks[] = $book;
            $this->available = false;
            echo "{$this->name} borrowed '{$book->title}'.<br>";
        } else {
            echo "Sorry, '{$book->title}' is not available.<br>";
        }
    }

    public function return(Book $book) {
        foreach($this->borrowedBooks as $key => $b) {
            if($b->isbn === $book->isbn)  {
                unset($this->borrowedBooks[$key]);
                $book->available = true;
                echo "{$this->name} returned '{$book->title}'.<br>";
                return;
            }
        }

        echo "{$this->name} did not borrow '{$book->title}'.<br>";
    }
}

$book1 = new Book("1984", "George Orwell", "12345");
$book2 = new Book("To Kill a Mockingbird", "Harper Lee", "67890");

$user1 = new User("Luigi");

$user1->borrow($book1); 
$user1->borrow($book1); 
$user1->return($book1); 
$user1->return($book2);