<?php

class Employee {
    private $employeeID;
    private $name;
    private $salary;

    public function __construct($employeeID, $name, $salary) {
        $this->employeeID = $employeeID;
        $this->name = $name;
        $this->salary = $salary;
    }

    public function giveRaise($amount) {
        if ($amount > 0) {
            $this->salary += $amount;
            echo "{$this->name} received a raise of P$amount.<br>";
        } else {
            echo "Raise amount must be positive.<br>";
        }
    }

    public function deductSalary($amount) {
        if ($amount > 0) {
            $this->salary -= $amount;
            if ($this->salary < 0) {
                $this->salary = 0;
            }
            echo "{$this->name}'s salary was deducted by P$amount.<br>";
        } else {
            echo "Deduction amount must be positive.<br>";
        }
    }

    public function getSalary() {
        return $this->salary;
    }

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
        echo "Employee name updated to {$this->name}.<br>";
    }

    public function getEmployeeID() {
        return $this->employeeID;
    }
}

echo "CHECKPOINT 1 <br>";
$emp1 = new Employee("E001", "Luigi", 25000);
echo "Initial salary of {$emp1->getName()}: P" . $emp1->getSalary() . "<br>";
$emp1->giveRaise(5000);
echo "After raise: P" . $emp1->getSalary() . "<br>";
$emp1->deductSalary(3000);
echo "After deduction: P" . $emp1->getSalary() . "<br>";
$emp1->setName("Ugiw");
echo "Updated employee name: {$emp1->getName()}<br>";

class Manager extends Employee {
    private $bonus;

    public function __construct($employeeID, $name, $salary, $bonus) {
        parent::__construct($employeeID, $name, $salary);
        $this->bonus = $bonus;
    }

    public function applyBonus() {
        $this->giveRaise($this->bonus);
        echo "{$this->getName()} received a bonus of P{$this->bonus}.<br>";
    }
}

echo "<br> CHECKPOINT 2 - PART 1 <br>";

$manager1 = new Manager("M001", "Luwi", 40000, 10000);
echo "Initial salary of Manager {$manager1->getName()}: P" . $manager1->getSalary() . "<br>";

$manager1->giveRaise(5000);
$manager1->applyBonus();
$manager1->deductSalary(3000);
echo "Final salary of {$manager1->getName()}: P" . $manager1->getSalary() . "<br>";

class Department {
    private $name;
    private $employees = [];

    public function __construct($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }

    public function addEmployee($employee) {
        $this->employees[] = $employee;
        echo "{$employee->getName()} added to {$this->name} department.<br>";
    }

    public function removeEmployee($employeeID) {
        foreach ($this->employees as $index => $emp) {
            if ($emp->getEmployeeID() === $employeeID) {
                echo "{$emp->getName()} removed from {$this->name} department.<br>";
                unset($this->employees[$index]);
                $this->employees = array_values($this->employees);
                return;
            }
        }
        echo "Employee with ID $employeeID not found in {$this->name} department.<br>";
    }

    public function calculateTotalSalaries() {
        $total = 0;
        foreach ($this->employees as $emp) {
            $total += $emp->getSalary();
        }
        return $total;
    }

    public function updateEmployeeName($employeeID, $newName) {
        foreach ($this->employees as $emp) {
            if ($emp->getEmployeeID() === $employeeID) {
                $emp->setName($newName);
                return;
            }
        }
        echo "Employee with ID $employeeID not found.<br>";
    }

    public function showEmployeeSalary($employeeID) {
        foreach ($this->employees as $emp) {
            if ($emp->getEmployeeID() === $employeeID) {
                echo "{$emp->getName()}'s salary: P" . $emp->getSalary() . "<br>";
                return;
            }
        }
        echo "Employee with ID $employeeID not found.<br>";
    }
}

echo "<br> CHECKPOINT 2 - PART 2 <br>";

$dept = new Department("SITE Department");
$emp2 = new Employee("E002", "Walts", 22000);
$emp3 = new Employee("E003", "Ian", 28000);

$dept->addEmployee($emp1);
$dept->addEmployee($emp2);
$dept->addEmployee($emp3);

echo "Total salaries in " . $dept->getName() . " : P" . $dept->calculateTotalSalaries() . "<br>";

$dept->removeEmployee("E002");

echo "Total salaries after removal: P" . $dept->calculateTotalSalaries() . "<br>";
echo "<br> CHECKPOINT 3 <br>";
$dept->updateEmployeeName("E003", "Hey");
$dept->showEmployeeSalary("E003");
$dept->showEmployeeSalary("E001");

?>

