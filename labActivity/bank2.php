<?php

class BankAccount {
    private $accountNumber;
    private $accountHolder;
    private $balance;

    public function __construct(string $accountNumber, string $accountHolder, float $balance) {
        $this->accountNumber = $accountNumber;
        $this->accountHolder = $accountHolder;
        $this->balance = $balance;
    }

    public function deposit($amount) {
        if($amount > 0) {
            return  $this->balance += $amount;
        }
    }

    public function getBalance() {
        return $this->balance;
    }
}

class SavingsAccount extends BankAccount  {

    private $interestRate;

    public function __construct( $accountNumber, $accountHolder, $balance, $interestRate){
        parent::__construct($accountNumber, $accountHolder, $balance);
        $this->interestRate;
    }

    public function applyInterest() {
        $interest = $this->getBalance() * $this->interestRate;
        $this->deposit($interest);
        echo "Applied interest of $interest. <br>";
    }
}

$savings = new SavingsAccount("11111", "Alice", 1000, 0.05);
echo "Starting balance: " . $savings->getBalance() . "<br>";

$savings->applyInterest(); // 1000 * 0.05 = 50 → deposits 50
echo "Balance after interest: " . $savings->getBalance() . "<br>";