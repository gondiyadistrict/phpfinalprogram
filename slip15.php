<?php
$n=153;
$sum=0;
$temp=$n;
while($n=0)
{
    $rem=$n%10;
    $cude=$rem*$rem*$rem;
    $sum=$sum+$cube;
    $n=$n%10;
}
if ($num==$temp)
{
    echo"$temp the number is armstrong number";
}
else{
    echo"$temp the number is not armstrong number";
}
?>
//Q2
<?php
 $assoc_array=array(
    "apple"=>10,
    "banana"=>20,
    "cherry"=>30,
    "date"=>40
 );
 function display_elements($array){
    echo "\nElement of the associative array along with the key:\n";
    foreach($array as $key => $value){
        echo "$key $value\n";
    }
 }
 function display_size($array){
    $size = count($array);
    echo "\nSize of the associative array: $size\n";
 }
 function menu(){
    global $assoc_array;
    while(true){
        echo "\nMenu:\n";
        echo "1.display eelement of the array along with the key\n";
        echo "2. display the size of array\n";
        echo "3.Exit\n";
        $choice = readline("enter your choice(1/2/3):");
        switch($choice){
            case 1:
                display_elements($assoc_array);
            break;
            case 2:
                display_size($assoc_array);
                break;
                case 3:
                    echo"existing the program.\n";
                    exit();
                    default:
                    echo "invalid choice. please try again.\n";
                    break;

        }
    }
 }
 menu();
?>

//Q3demonstrate the  introspection
<?php

class Car {
  
    public $make;
    public $model;
    private $year;

    public function __construct($make, $model, $year) {
        $this->make = $make;
        $this->model = $model;
        $this->year = $year;
    }

   
    public function displayInfo() {
        echo "Car Info: {$this->make} {$this->model}, Year: {$this->year}\n";
    }

  
    private function startEngine() {
        echo "Engine started!\n";
    }
}


$car = new Car("Toyota", "Corolla", 2020);

echo "Class Name: " . get_class($car) . "\n";


$methods = get_class_methods($car);
echo "Methods: " . implode(", ", $methods) . "\n";


$properties = get_object_vars($car);
echo "Properties: " . implode(", ", array_keys($properties)) . "\n";

$methodName = 'startEngine';
if (method_exists($car, $methodName)) {
    echo "Method '$methodName' exists in the class.\n";
} else {
    echo "Method '$methodName' does not exist in the class.\n";
}

$reflectionClass = new ReflectionClass($car);
$property = $reflectionClass->getProperty('make');
echo "Property 'make' visibility: " . ($property->isPublic() ? "Public" : "Private") . "\n";


$method = $reflectionClass->getMethod('displayInfo');
echo "Method 'displayInfo' is accessible: " . ($method->isPublic() ? "Yes" : "No") . "\n";

?>

