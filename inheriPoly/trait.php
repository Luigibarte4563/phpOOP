<?php
    class Bird {
        public function display() {
            echo "I am a bird, ";
        }
    }

    trait Pet {
        public function show() {
            echo " a pet";
        }
    }

    class Parrot extends Bird {
        
        use Pet;
        public function msg() {
            echo ", and a parrot.";
        }
    }

    $test = new Parrot();
    $test->display();
    $test->show();
    $test->msg();