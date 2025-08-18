<?php
class BankAccount {

    private $owner;
    private $balance;

    public function __construct($owner, $balance) {
        $this->owner = $owner;
        $this->balance = $balance;
    }

    public function getOwner() {
        return $this->owner;
    }

    public function getBalance() {
        return  $this->balance;
    }

    public function deposit($amount){
        $this->balance += $amount;
    }

    public function withdraw($amount) {
        if($this->balance - $amount >= 1000) {
            $this->balance -= $amount;
        }else {
            echo "Insuffient funds. Minimum balance of 1000 must be maintained.";
        }
    }

    public function transfer($toAccount, $amount) {
        if($this->balance - $amount >= 1000) {
            $this->balance -= $amount;
            $toAccount->deposit($amount);
            echo "Tranfer successful: ₱$amount sent to " . $toAccount->getOwner() . "<br>";
        }else {
            echo "Transfer failed. Minimum balance of 1000 must be maintained.";
        }
    }
}

$luigi = new BankAccount("Luigi", 5000);
$mario = new BankAccount("Mario", 2000);

echo "Before Transfer: <br>";
echo "Luigi Balance: " . $luigi->getBalance() . "<br>";
echo "Mario Balance: " . $mario->getBalance() . "<br><br>";

$luigi->transfer($mario, 4500); // Luigi tries to send ₱4500

echo "<br>After Transfer:<br>";
echo "Luigi Balance: " . $luigi->getBalance() . "<br>";
echo "Mario Balance: " . $mario->getBalance() . "<br>";


?>