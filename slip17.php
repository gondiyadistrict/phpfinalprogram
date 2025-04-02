<html>
    <body>
    <h2>Reverse String</h2>
<form method="post">
    Enter a string:<input type="text" name="input"><br><br>
    <input type="submit" name="submit" value="submit">
</form>
<?php
function reverse($str)
{
    $srev=strrev($str);
    echo $srev;  
}
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $str=$_POST['input'];
    if($str<0)
    {
        echo"<p>PLease entera string:</p>";

    }else{
        $rev=reverse($str);
        echo"<p>the reverse of string $str is:$rev</p>";
    }
}
?>
//Q2
Declare array. Reverse the order of elements, making the first element last and last element first and similarly rearranging other array elements. [Hint: array_reverse()]
<?php
$index_array=array("zack","Anthony","salim","raghv");
function reverse($index_array)
{
   $new_array=array_reverse($index_array);
   print_r($new_array);
}
reverse($index_array);
?>
//Q3
<?php
class Employee {
    private $id;
    private $name;
    private $department;
    private $salary;

    public function __construct($id, $name, $department, $salary) {
        $this->id = $id;
        $this->name = $name;
        $this->department = $department;
        $this->salary = $salary;
    }

    public function getSalary() {
        return $this->salary;
    }

    public function getName() {
        return $this->name;
    }

    public function getDepartment() {
        return $this->department;
    }

    public function getId() {
        return $this->id;
    }

    public function getTotalSalary() {
        return $this->salary;
    }

    public function display() {
        echo "ID: " . $this->id . "<br>";
        echo "Name: " . $this->name . "<br>";
        echo "Department: " . $this->department . "<br>";
        echo "Salary: " . $this->salary . "<br>";
    }
}

class Manager extends Employee {
    private $bonus;

    public function __construct($id, $name, $department, $salary, $bonus) {
        parent::__construct($id, $name, $department, $salary);
        $this->bonus = $bonus;
    }
    public function getTotalSalary() {
        return $this->getSalary() + $this->bonus;
    }
    public function display() {
        parent::display(); // Call Employee's display method
        echo "Bonus: " . $this->bonus . "<br>";
        echo "Total Salary (Salary + Bonus): " . $this->getTotalSalary() . "<br>";
    }
}

$managers = [
    new Manager(1, "Alice", "HR", 5000, 1000),
    new Manager(2, "Bob", "Sales", 6000, 1200),
    new Manager(3, "Charlie", "IT", 7000, 1500),
    new Manager(4, "David", "Marketing", 5500, 1100),
    new Manager(5, "Eve", "Finance", 6500, 1400),
    new Manager(6, "Frank", "Operations", 7500, 1800)
];

$maxSalaryManager = $managers[0];
foreach ($managers as $manager) {
    if ($manager->getTotalSalary() > $maxSalaryManager->getTotalSalary()) {
        $maxSalaryManager = $manager;
    }
}

echo "<h2>Manager with Maximum Total Salary:</h2>";
$maxSalaryManager->display();
?>