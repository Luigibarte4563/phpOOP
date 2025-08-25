class Book {
    private $price;
    protected $title;

    function __construct(string $param1 = "PHP Basics", int $param2 = 380) {
        $this->title = $param1;
        $this->price = $param2;
    }

    public function getPrice() {
        echo "Price: $this->price <br/>";
    }

    public function getTitle() {
        return $this->title;
    }
}
class mybook {
    public function getmytitle($b) {
        echo "Title: " . $b->getTitle() . "<br/>";
    }
}

$b1 = new mybook();
$b = new Book();
$b1->getmytitle($b);