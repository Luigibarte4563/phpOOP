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
        $this->salary -= $amount;
        if ($this->salary < 0) {
            $this->salary = 0;
        }
        return $this->salary;
    }

    // Standard getter for salary`
    public function getSalary() {
        return $this->salary;
    }

    public function getInfo() {
        return "EmployeeID: {$this->employeeID} <br>
                Name: {$this->name} <br>
                Salary: {$this->salary} <br>"; 
    }

}

echo "Checkpoint 1 <br>";
$employee = new Employee("123", "Luigi", 1000);
$employee->setName("ugiw");
echo $employee->getName() . "<br>";
echo "Salary Raise: " . $employee->giveRaise(500) . "<br>";
echo "Salary Deduct: " . $employee->deductSalary(300) . "<br>";
echo "Salary Update: " . $employee->getSalary() . "<br>";
echo $employee->getInfo();
echo "<br>";

class Manager extends Employee {
    private $bonus;

    public function __construct($employeeID, $name, $salary, $bonus) {
        parent::__construct($employeeID, $name, $salary); 
        $this->bonus = $bonus;
    }

    public function applyBonus() {
        return $this->giveRaise($this->bonus);
    }
}

echo "Checkpoint 2 Part 1 <br>";
$manager = new Manager("321", "Luigi", 500, 500);
echo "Bonus Applied: " .  $manager->applyBonus() . "<br>";
echo "Salary Raise: " . $manager->giveRaise(500) . "<br>";
echo "Salary Deduct: " . $manager->deductSalary(300) . "<br>";
echo "<br>";

class Department {
    private $name;
    private $employees = []; 

    public function __construct($name) {
        $this->name = $name;
    }

    public function addEmployee($employee) {
        $this->employees[] = $employee;
        echo $employee->getName() . " added to " . $this->name . " department.<br>";
    }

    public function removeEmployee($employeeID) {
        foreach ($this->employees as $index => $emp) {
            $reflect = new ReflectionClass($emp);
            $prop = $reflect->getProperty('employeeID');
            $prop->setAccessible(true);
            $id = $prop->getValue($emp);

            if ($id === $employeeID) {
                unset($this->employees[$index]);
                echo "Employee ID {$employeeID} removed from {$this->name}.<br>";
                $this->employees = array_values($this->employees); // reindex
                return;
            }
        }
        echo "Employee ID {$employeeID} not found.<br>";
    }

    public function calculateTotalSalaries() {
        $total = 0;
        foreach ($this->employees as $emp) {
            $total += $emp->getSalary();
        }
        echo "Total salary for {$this->name} department: ₱$total<br><br>";
    }
}

$dept = new Department("IT Department");
$dept->addEmployee($employee);
$dept->addEmployee($manager);
$dept->calculateTotalSalaries();
?>
