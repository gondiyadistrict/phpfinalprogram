//Q1
<?php
$name="nujhat";
$class="sybca";
$rollnumber=123;
echo "name of student:$name\n","<br>";
echo "class of student:$class\n","<br>";
echo "roll of $name is:$rollnumber","<br>";
?>
//Q2
<form method="post">
    enter first number:<input type="number" name="input"><br><br>
    eneter second number:<input type="number" name="num"><br><br>
    Enter your choice:<br>
   <input type="radio" id="add"name="num2" value="add"> addition:<br><br>
    <input type="radio" id="sub" name="num2" value="sub">Subtraction:<br><br>
    <input type="radio" id="multi" name="num2" value="multi">multiplication:<br><br>
<input type="radio" id="div" name="num2" value="div">division:<br><br>
   <input type="radio"id="mod"  name="num2" value="mod">modulus:<br><br>
   <input type="submit" name="submit" value="submit">
</form>
<?php
function calculate($num1,$num2,$operation='add')
{
switch($operation)
{
    case'add':
       return $num1+$num2;
       break; 
        case'sub':
            return $num1-$num2;
            break; 
            case'multi':
                return  $num1*$num2;
                break; 
    
                case'div':
                
                    return $num1/$num2;
                    break; 

                    case'mod':
                        return $num1%$num2;
                        break; 
                        default:
                        echo"invalid operation";
                        break; 
            }
}
if($_SERVER["REQUEST_METHOD"]=="POST"){
$num1=$_POST['input'];
$num2=$_POST['num'];
$operation=isset($_POST['operation'])?$_POST['operation']:"add";
    
$result=calculate($num1,$num2,$operation);
echo"the result is:".$result."<br>";
echo"first number:$num1". "<br>";
echo"second number:$num2"."<br>";
echo"operation".ucfirst($operation);
echo "result:$result";

}
?>
//Q3
<?php

define('PI','3.14');
interface Shape {
   
    
    
    public function area();
    
    
    public function volume();
}

class Cylinder implements Shape {
    private $radius;
    private $height;
    
    public function __construct($radius, $height) {
        $this->radius = $radius;
        $this->height = $height;
    }
    
    public function area() {
        $a= 2*PI * $this->radius * ($this->radius + $this->height);
        return $a;
    }
    
    public function volume() {
        $b=PI * $this->radius * $this->radius * $this->height;
        return $b;
    }
}

$l=readline("enter radius");
$h=readline("enter height");
$cylinder = new Cylinder($l, $h);
echo "Area of the cylinder: " . $cylinder->area() . " square units\n";
echo "Volume of the cylinder: " . $cylinder->volume() . " cubic units\n";

?>