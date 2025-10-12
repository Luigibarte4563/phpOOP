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
        return $this->salary += $amount;
    }

    public function deductSalary($amount) {
        if($this->salary > 0) {
            return $this->salary -= $amount;
            if($this->salary < 0) {
                return $this->salary = 0;
            }    
        }
    }

    public function setName($name) {
        return $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }

    public function salary() {
        return $this->salary;
    }

    public function getEmpID() {
        return $this->employeeID;
    }
}

echo "<h3>Checkpoint 1</h3>";
$emp = new Employee("0001", "Luigi", 15000);
echo "Name : " . $emp->getName() . "<br>";
echo "Employee ID: " . $emp->getEmpID() . "<br>";
echo "Raise salary: " . $emp->giveRaise(1000) . "<br>";
echo "Deduct salary: " . $emp->deductSalary(10000) . "<br>";
echo "Salary update: " . $emp->salary() . "<br>";

class Manager extends Employee {
    private $bonus;

    public function __construct($employeeID, $name, $salary, $bonus) {
        parent:: __construct($employeeID, $name, $salary);
        $this->bonus = $bonus;
    }

    public function applyBonus() {
        $salary = $this->salary();
        $sum = $salary += $this->bonus;
        return $sum;
    }


}

echo "<h3>Checkpoint 2 - part 1 </h3>";
$man = new Manager("0002", "Luigi", 20000, 5000);
echo "Name : " . $man->getName() . "<br>";
echo "Apply Bonus: " . $man->applyBonus() . "<br>";
echo "Employee ID: " . $man->getEmpID() . "<br>";
echo "Raise salary: " . $man->giveRaise(1000) . "<br>";
echo "Deduct salary: " . $man->deductSalary(10000) . "<br>";
echo "Salary update: " . $man->salary() . "<br> <br>";

class Department {
    private $name;
    private $employees = [];

    public function __construct($name) {
        $this->name = $name;
    }

    public function addEmployee($employee) {
        $this->employees[] = $employee;
        echo $employee->getName() . " added to {$this->name} <br>";
    }

    public function removeEmployee($name) {
        foreach($this->employees as $index => $emp) {
            if($emp->getName() === $name) {
                unset($this->employees[$index]);
                $this->employees = array_values($this->employees);
                echo "$name is remove from the {$this->name} Department <br>";
                return;
            }
        }
        echo "$name not found <br>";
    }

    public function showEmployeeSalary($employeeID) {
        foreach($this->employees as $emp) {
            if($emp->getName() === $employeeID) {
                echo "{$emp->getName()}'s salary: P" . $emp->salary() . "<br>";
                return;
            }
        }

        echo "Employee with ID $employeeID not found.<br>";
    }
}

echo "<h3>Checkpoint 2 - part 2 </h3>";
$dep = new Department("SITE");
$emp1 = new Employee("0002", "Kol", 2000);
$dep->addEmployee($emp);
$dep->addEmployee($emp1);
$dep->removeEmployee("Koli");

echo "<h3>Checkpoint 3 </h3>";
echo "Name : " . $emp->setName("Jiw") . "<br>";
echo "Salary update: " . $man->salary() . "<br>";
$dep->showEmployeeSalary("0001");