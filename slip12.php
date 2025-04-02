<?php
$name="nujhat";
$class="sybca";
$rollnumber=123;
echo "name of student:$name\n","<br>";
echo "class of student:$class\n","<br>";
echo "roll of $name is:$rollnumber","<br>";
?>
//Q2
<form method="POST">
enter first number:<input type="number" name="num1">
enter second number:<input type="number" name="num2">
enter your choice:
<input type ="radio" id="add" name="num" value="add">addition:
<input type="radio" id="subtract" name="num" value="subtract">subtraction:
<input type="radio" id="multiply" name="num" value="multiply">multiplication:
<input type="radio" id="divide" name="num" value="divide">division:
<input type="radio" id="modulus" name="num" value="modulus">modulus:
</form>
<?php

function calculate($num1,$num2,$operation)
{
    switch($operation)
    {
        case 'add':
           return $num1+$num2;
        case'subtract':
           return $num1-$num2;
        case'multiply':
            return $num1*$num2;
        case'divide':
                if($num2!=0)
                return $num1/$num2;
            else 
              return'error:division by zero';
        case'modulus':
                return $num1%$num2;
    }
        if($_SERVER["REQUEST_METHODS"]=="POST")
        {
            $num1=$_POST["num1"];
            $num2=$_POST["num2"];
            $operation=calculate($num1,$num2,$operation);
            echo "Result:$result";
        }
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