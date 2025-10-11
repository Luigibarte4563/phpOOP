<?php

class Employee  {
    private $employeeID;
    private $name;
    private $salary;

    public function __construct($employeeID, $name, $salary) {
        $this->employeeID = $employeeID;
        $this->name = $name;
        $this->salary = $salary;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }

    public function giveRaise($amount) {
        return $this->salary += $amount;
    }

    public function deductSalary($amount) {
        if($this->salary > 0) {
            return $this->salary -= $amount;
        }else if($this->salary <= 0){
            return $this->salary = 0;
        }
    }

    public function salaryUpdate() {
        return $this->salary;
    }

    public function getInfo() {
        return "EmployeeID: {$this->employeeID} <br>
                Name: {$this->name} <br>
                Salary: {$this->salary} <br>"; 
    }

}

echo "checkpoint 1 <br>";
$employee = new Employee("123", "Luigi", 1000);
$employee->setName("ugiw");
echo $employee->getName();
echo "Salary Raise: " . $employee->giveRaise(500) . "<br>";
echo "Salary Deduct: " . $employee->deductSalary(300) . "<br>";
echo "Salary Update: " . $employee->salaryUpdate() . "<br>";
echo $employee->getInfo();
echo "<br>";

class Manager extends Employee {
    private $bonus;

    public function __construct($employeeID, $name, $salary, $bonus) {
        parent:: __construct($employeeID, $name, $salary); 
        $this->bonus = $bonus;
    }

    public function applyBonus() {
        return $this->salary = $this->bonus;
    }

    public function giveRaise($amount) {
        return $this->salary += $amount;
    }

    public function deductSalary($amount) {
        if($this->salary > 0) {
            return $this->salary -= $amount;
        }else if($this->salary <= 0){
            return $this->salary = 0;
        }
    }
}

echo "Checkpoint 2 Part 1 <br>";
$manager = new Manager("321", "Luigi", 500, 500);
echo "Bonus Applied: " .  $manager->applyBonus() . "<br>";
echo "Salary Raise: " . $manager->giveRaise(500) . "<br>";
echo "Salary Deduct: " . $manager->deductSalary(300) . "<br>";
echo "<br>";

class Department {
    private $depName;
    private $employees = [];

    
}