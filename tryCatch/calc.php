<?php
class division {

    public $num1;
    public $num2;
    public $result;

    public function divide($num1, $num2)  {
        $this->num1 = $num1;
        $this->num2 = $num2;

        if($this->num2 == 0) {
            throw new Exception("Cannot divide by zero!");
        }

        $this->result = $this->num1 / $this->num2;
    }

    public function getAns(){
        return $this->result;
    }
}

$calc = new division();

try {
    echo $calc->divide(10, 0);
}catch(Exception $e) {
    echo "Error: " . $e->getMessage() . "<br>";
} finally {
    echo "Answer: " . $calc->getAns();
}