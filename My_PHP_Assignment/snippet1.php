<?php
    class Book {
        private $price;
        protected $title;

        function __construct(string $param1 = "PHP BAsics", int $param2 = 380) {
            $this->title = $param1;
            $this->price = $param2;
        }

        public function getPRice() {
            echo "Price: $this->price <br/>";
        }

        public function getTitle() {
            echo "Title: $this->title <br/>";
        }
    }
    class mybook {
        public function getmytitle($b) {
            echo "Title: $b->title <br/>";
        }
    }

    $b1 = new mybook();
    $b = new Book();
    $b1->getmytitle($b1);
?>    