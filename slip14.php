<?php
$a=27;
$b=30;
$c=9;
echo"the number of a is:".$a."<br>";
echo"the number of b is:".$b."<br>";
echo"the number of c is:".$c."<br>";
if($a>$b&&$a>$c)
{
    echo"the number of a is greater than b and c";
    echo"<br>";
}
else if ($b>$a&&$b>$c)
{
    echo"the number of b is greater than a and c";
}
else{
    echo"the number of c is greater than b and a:";
}
//Q2
< method="POST">
    enter the string 1:<input type="text" name="input1">
    enter the string 2:<input type="text" name="input2">
    <input type="submit" value="string operation" name="input"><br></br>
    <input type="radio" name="operation" value="compare_string">==<br>
    <input type="radio" name="operation" value="strcmp"><br>
    <input type="radio" name="operation" value="append">append<br>
    <input type="radio" name="operation" value="reverse">reverse<br>
</form>   
<?php
if($_SERVER["REQUEST_METHODS"]=="POST"){
    $cop=$_POST['input1'];
    $cap=$_POST['input2'];
    $operation=$POST['operation'];

    function compare($string1,$string2){
        if($string1==$string2){
            echo"equal";
        }else{
            echo"not equal";
        }
        echo"<br></br>";
    }
    function compare_string($string1,$string2){
        if(strcmp($string1,$string2)==0){
            echo"string match"."<br></br>";
        }else{
            echo"string do not match"."<br>";
        }
    }
    function append_string($string1,$string2){
        return $string1.$string2;
    }
    function reverse_with_position($string,$position){
        if($position<0||$position>=strlen($string)){
            return$string;
        }
        $parttoreverse=substr($string,$position);
        $reversedpart=strlen($parttoreverse);
        return substr($string,0,$position).$reversedpart;
    }
}
    switch($operation){
        case'compare_equal':
        compare($cop,$cap);
        break;
        case'strcmp':
        compare_string($cop,$cap);
        break;
        case'append':
        $appendstring=append_string($cop,$cap);
        echo"appended string:".$appendstring."<br>;
        break;
        case'reverse':
        $position=2;
        $reversedstring=reverse_with_position($cop,$position);
        echo"reversed string from position $position".$reversedstring."<br>";
        break;
        default:
        echo"no operation selected.";
        break;
         }
}
    
?>
//Q3
<?php


class Teacher {
    protected $code;
    protected $name;
    protected $qualification;

   
    public function __construct($code, $name, $qualification) {
        $this->code = $code;
        $this->name = $name;
        $this->qualification = $qualification;
    }

   
    public function displayTeacher() {
        echo "Code: $this->code, Name: $this->name, Qualification: $this->qualification\n";
    }
}


class TeachAccount extends Teacher {
    protected $account_no;
    protected $joining_date;

   
    public function __construct($code, $name, $qualification, $account_no, $joining_date) {
        parent::__construct($code, $name, $qualification); 
        $this->account_no = $account_no;
        $this->joining_date = $joining_date;
    }

   
    public function displayAccount() {
        echo "Account No: $this->account_no, Joining Date: $this->joining_date\n";
    }
}


class TeachSal extends TeachAccount {
    private $basic_pay;
    private $earnings;
    private $deduction;


    public function __construct($code, $name, $qualification, $account_no, $joining_date, $basic_pay, $earnings, $deduction) {
        parent::__construct($code, $name, $qualification, $account_no, $joining_date); // Call parent constructor
        $this->basic_pay = $basic_pay;
        $this->earnings = $earnings;
        $this->deduction = $deduction;
    }

    public function displaySalary() {
        $net_salary = $this->basic_pay + $this->earnings - $this->deduction;
        echo "Basic Pay: $this->basic_pay, Earnings: $this->earnings, Deduction: $this->deduction, Net Salary: $net_salary\n";
    }
}


class TeacherManagement {
    private $teachers = [];

  
    public function buildMasterTable() {
        $code = readline("Enter Teacher Code: ");
        $name = readline("Enter Teacher Name: ");
        $qualification = readline("Enter Teacher Qualification: ");
        $account_no = readline("Enter Account No: ");
        $joining_date = readline("Enter Joining Date (YYYY-MM-DD): ");
        $basic_pay = readline("Enter Basic Pay: ");
        $earnings = readline("Enter Earnings: ");
        $deduction = readline("Enter Deduction: ");

       
        $teacher = new TeachSal($code, $name, $qualification, $account_no, $joining_date, $basic_pay, $earnings, $deduction);
        $this->teachers[] = $teacher;
        echo "Teacher added successfully!\n";
    }

 
    public function sortTeachers() {
        usort($this->teachers, function($a, $b) {
            return $a->code <=> $b->code;
        });
        echo "Teachers sorted by code!\n";
    }

  
    public function searchTeacher() {
        $search_code = readline("Enter Teacher Code to search: ");
        $found = false;
        foreach ($this->teachers as $teacher) {
            if ($teacher->code == $search_code) {
                $teacher->displayTeacher();
                $teacher->displayAccount();
                $teacher->displaySalary();
                $found = true;
                break;
            }
        }
        if (!$found) {
            echo "Teacher with code $search_code not found.\n";
        }
    }

    public function displaySalaries() {
        foreach ($this->teachers as $teacher) {
            $teacher->displayTeacher();
            $teacher->displayAccount();
            $teacher->displaySalary();
            echo "------------------------------------\n";
        }
    }
}

$teacherManagement = new TeacherManagement();
while (true) {
    echo "Menu:\n";
    echo "1. Build Master Table\n";
    echo "2. Sort All Entries\n";
    echo "3. Search an Entry\n";
    echo "4. Display Salary of All Teachers\n";
    echo "5. Exit\n";
    $choice = readline("Enter your choice: ");

    switch ($choice) {
        case 1:
            $teacherManagement->buildMasterTable();
            break;
        case 2:
            $teacherManagement->sortTeachers();
            break;
        case 3:
            $teacherManagement->searchTeacher();
            break;
        case 4:
            $teacherManagement->displaySalaries();
            break;
        case 5:
            exit("Exiting the program.\n");
        default:
            echo "Invalid choice! Please try again.\n";
    }
}
?>


