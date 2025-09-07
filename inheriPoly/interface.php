<?php
    class Bird {
        public function insideBird() {
            echo "I am bird";
        }
    }

    interface Pet {
        public function insidePet();
    }

    class Parrot extends Bird implements Pet {
        function insidePet() {
            echo "and a pet, ";
        }

        public function insideParrot(){
            echo "and a parrot.";
        }
    }

    $obj = new Parrot();
    $obj->insideBird();
    $obj->insidePet();
    $obj->insideParrot();