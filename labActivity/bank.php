<?php

// ✅ Checkpoint 1: Encapsulation
class BankAccount {
    private $accountNumber;
    private $accountHolder;
    private $balance;

    // Constructor
    public function __construct($accountNumber, $accountHolder, $balance) {
        $this->accountNumber = $accountNumber;
        $this->accountHolder = $accountHolder;
        $this->balance = $balance;
    }

    // Deposit method
    public function deposit($amount) {
        if ($amount > 0) {
            $this->balance += $amount;
            echo "Deposited $amount. New balance: {$this->balance}<br>";
        } else {
            echo "Invalid deposit amount.<br>";
        }
    }

    // Withdraw method
    public function withdraw($amount) {
        if ($amount > 0 && $this->balance >= $amount) {
            $this->balance -= $amount;
            echo "Withdrew $amount. New balance: {$this->balance}<br>";
        } else {
            echo "Insufficient funds or invalid withdrawal amount.<br>";
        }
    }

    // Getter for balance (read-only)
    public function getBalance() {
        return $this->balance;
    }

    // Getter for account holder
    public function getAccountHolder() {
        return $this->accountHolder;
    }

    // Setter for account holder
    public function setAccountHolder($name) {
        $this->accountHolder = $name;
    }
}

// ✅ Checkpoint 2: Inheritance
class SavingsAccount extends BankAccount {
    private $interestRate;

    public function __construct($accountNumber, $accountHolder, $balance, $interestRate) {
        parent::__construct($accountNumber, $accountHolder, $balance);
        $this->interestRate = $interestRate;
    }

    // Apply interest
    public function applyInterest() {
        $interest = $this->getBalance() * $this->interestRate;
        $this->deposit($interest);
        echo "Applied interest of $interest.<br>";
    }
}

// ✅ Checkpoint 2: Composition
class Customer {
    private $name;
    private $bankAccount;

    public function __construct($name, BankAccount $bankAccount) {
        $this->name = $name;
        $this->bankAccount = $bankAccount;
    }

    // Interact with BankAccount
    public function deposit($amount) {
        $this->bankAccount->deposit($amount);
    }

    public function withdraw($amount) {
        $this->bankAccount->withdraw($amount);
    }

    public function checkBalance() {
        echo "{$this->name}'s balance: " . $this->bankAccount->getBalance() . "<br>";
    }

    // Update account holder's name using setter
    public function updateAccountHolder($newName) {
        $this->bankAccount->setAccountHolder($newName);
        echo "Account holder updated to: {$this->bankAccount->getAccountHolder()}<br>";
    }
}

// ✅ DEMONSTRATION

echo "<h3>Checkpoint 1: Encapsulation</h3>";
$account = new BankAccount("12345", "Alice", 1000);
$account->deposit(500);
$account->withdraw(300);
echo "Final Balance: " . $account->getBalance() . "<br>";

echo "<h3>Checkpoint 2: Inheritance</h3>";
$savings = new SavingsAccount("67890", "Bob", 2000, 0.05);
$savings->deposit(1000);
$savings->applyInterest();
$savings->withdraw(500);
echo "Savings Final Balance: " . $savings->getBalance() . "<br>";

echo "<h3>Checkpoint 2: Composition</h3>";
$customerAccount = new BankAccount("24680", "Charlie", 1500);
$customer = new Customer("Charlie", $customerAccount);
$customer->deposit(500);
$customer->withdraw(200);
$customer->checkBalance();

echo "<h3>Checkpoint 3: Getter and Setter</h3>";
$customer->updateAccountHolder("Charles");
$customer->checkBalance();
