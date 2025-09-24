<?php

class bankAccount {

    private $accountNumber;
    private $accountHolder;
    private $balance;

    public function __construct($accountNumber, $accountHolder, $balance) {
        $this->accountNumber = $accountNumber;
        $this->accountHolder = $accountHolder;
        $this->balance = $balance;
    }

    public function deposit($amount) {
        $this->balance += $amount;
        echo "Balance after deposit: {$this->balance} <br>";
    }

    public function withdraw($amount) {
        if($this->balance >= $amount) {
            $this->balance -= $amount;
            echo "Balance after withdraw: {$this->balance} <br>";
        }
    }

    public function getAccountHolder() {
        return "Your account holder is: {$this->accountHolder} <br>";
    }

    public function setAccountHolder($newAccountHolder) {
        $this->accountHolder = $newAccountHolder;
        echo "Your account holder after: {$this->accountHolder} <br>";
    }

    public function setBalance($newBalance) {
        $this->balance = $newBalance;
    }

    public function getBalance() {
        return $this->balance;
    }
}

class savingsAccount extends bankAccount{
    private $interestRate;

    public function __construct($accountNumber, $accountHolder, $balance, $interestRate) {
        parent::__construct($accountNumber, $accountHolder, $balance);
        $this->interestRate = $interestRate;
    }

    public function applyInterest(){
        $currentBalance = $this->getBalance();
        $interest = $currentBalance * $this->interestRate;

        $newBalance = $currentBalance + $interest;
        $this->setBalance($newBalance);

        echo "Interest applied: {$interest} <br>";
        echo "Balance after interest: {$newBalance} <br>";
    }
}

//testing
// $savings = new savingsAccount("123", "Luigi", 1000.0, 0.05);

// echo $savings->getAccountHolder();
// $savings->setAccountHolder("barte");
// $savings->deposit(300);
// $savings->withdraw(300);
// $savings->applyInterest();
// echo "<br>";

class Customer {
    private $name;
    private $bankAccount;

    public function __construct($name, bankAccount $bankAccount) {
        $this->name = $name;
        $this->bankAccount = $bankAccount;
    }

    public function setAccountHolder($newAccountHolder) {
        $this->bankAccount->setAccountHolder($newAccountHolder);
    }

    public function getAccountHolder() {
        return $this->bankAccount->getAccountHolder();
    }

    public function deposit($amount) {
        $this->bankAccount->deposit($amount);
    }

    public function withdraw($amount) {
        $this->bankAccount->withdraw($amount);
    }

    public function getBalance() {
        $this->bankAccount->getBalance();
    }
}

// testing
// $account = new bankAccount("123", "Luigi", 1000.0);
// $customer = new Customer("Luigi", $account);

// $customer->deposit(300);   
// $customer->withdraw(200);  
// $customer->getBalance();  
// echo "<br>";

// the instruction of the lab exam
$bank = new bankAccount("123", "luigi", 1000.2);

echo $bank->getBalance() . "<br>";
$bank->setAccountHolder("barte");
echo "<br>";

$cus = new Customer("lui", $bank);
// echo $cus->getAccountHolder();
$cus->setAccountHolder("magic");
