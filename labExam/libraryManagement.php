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

    public function borrowBook($book) {
        echo "{$this->name} is borrowing '{$book->title}'...<br>";
        $book->borrowBook();
    }

    public function returnBook($book) {
        echo "{$this->name} is returning '{$book->title}'...<br>";
        $book->returnBook();
    }
}

$b1 = new Book("1994", "George Orwell", 123456789, true);
$b1->displayInfo();

$b2 = new Book("The Hobbit", "J.R.R. Tolkien", 987654321, true);
$b2->displayInfo();

$b3 = new Book("To Kill a Mockingbird", "Harper Lee", 456789123, true);
$b3->displayInfo();

$b1->borrowBook();
$b1->returnBook();
echo  "<br>";

class Member {
    var $name;
    var $email;
    var $phone;
    var $isVIP = false;

    public function __construct($name, $email, $phone, $isVIP = false) {
        $this->name = $name;
        $this->email = $email;
        $this->phone = $phone;
        $this->isVIP = $isVIP;
    }

    public function details() {
        echo "---Details--- <br>";
        echo "Name: " .  $this->name . "<br>";
        echo "Email: " . $this->email . "<br>";
        echo "Phone: " . $this->phone . "<br>";
        echo "VIP: " . ($this->isVIP ? "Yes" : "No") . "<br>";
    }

    public function calculateFee($baseFee) {
        if ($this->isVIP) {
            $discounted = $baseFee * 0.9; // 10% discount
            echo "{$this->name} is VIP. Borrowing fee after discount: {$discounted}<br>";
        } else {
            echo "{$this->name} is not VIP. Borrowing fee: {$baseFee}<br>";
        }
    }
}

$member = new Member("Alice", "Alice@gmail.com", "091231234");
$member->details();
echo "<br>";

class Librarian {
    var $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function assistMember($memberName) {
        echo "{$this->name} is assisting member {$memberName}.<br>";
    }
}

class Manager {
    var $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function supervise() {
        echo "{$this->name} is supervising library operations.<br>";
    }
}

$member2 = new Member("John", "John@gmail.com", "09123131");
$member2->isVIP = true;
