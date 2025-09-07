<?php

use Dom\Node;

    class Jewellery {
        var $cost = 1000;

        public function printName($name) {
            echo "this is base class: Jewellery & name of jewellery is : " . $name . "<br>";
        }
    }

    class Necklace extends Jewellery {
        public function printName($name) {
            echo "this is base class: Jewellery & name of jewellery is : " . $name . "<br>";
            echo "price is: " . $this->cost . "<br>";
        }
    }

    $f = new Jewellery();
    $s = new Necklace();
    $f->printName("Hotdog");
    $s->printName("longanisa");