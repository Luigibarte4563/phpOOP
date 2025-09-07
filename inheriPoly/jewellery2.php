<?php
    class Jewellery {
        public function totalCost() {
            return "total jewellery cost: 60000";
        }
    }

    class Necklace extends Jewellery {
        public function necklace() {
            return "necklace cost: 45000";
        }
    }


    class Pendant extends Necklace {
        public function pendantCost() {
            return 'pendant cost: 600000';
        }

        public function priceList() {
            echo '1. ' . $this->totalCost() . "<br>";
            echo '2. ' . $this->necklace() . "<br>";
            echo '3. ' . $this->pendantCost() . "<br>";
        }
    }

    $obj = new Pendant();
    $obj->priceList();