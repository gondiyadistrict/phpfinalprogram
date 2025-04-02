<?php
$timetable=[
    "Monday" => ["Math", "English", "Physics", "Chemistry", "Biology"],
    "Tuesday" => ["History", "Geography", "Computer Science", "Math", "PE"],
    "Wednesday" => ["Chemistry", "Biology", "English", "Math", "History"],
    "Thursday" => ["Physics", "Math", "Geography", "Computer Science", "PE"],
    "Friday" => ["Biology", "History", "English", "Chemistry", "Math"]
];
echo "<h1>Class Timetable</h1>";
echo "<table border='1'>";
echo "<tr><th>Day</th><th>Period 1</th><th>Period 2</th><th>Period 3</th><th>Period 4</th><th>Period 5</th></tr>";
foreach ($timetable as $day => $subjects) {
    echo "<tr>";
    echo "<td>$day</td>";
    foreach ($subjects as $subject) {
        echo "<td>$subject</td>";
    }
    echo "</tr>";
}

echo "</table>";
?>
//Q2
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $itemsData = $_POST['items']; 
    $itemsArray = explode(";", $itemsData); 

    $totalBill = 0;
    
    echo "<h1>Itemized Bill</h1>";
    echo "<table border='1' cellpadding='10'>";
    echo "<tr><th>Item Code</th><th>Item Name</th><th>Units Sold</th><th>Rate</th><th>Total</th></tr>";
    
    foreach ($itemsArray as $item) {
        $itemDetails = explode(",", $item); 
        if (count($itemDetails) == 4) {
            $itemCode = trim($itemDetails[0]);
            $itemName = trim($itemDetails[1]);
            $unitsSold = trim($itemDetails[2]);
            $rate = trim($itemDetails[3]);
            
            $totalPrice = $unitsSold * $rate;
            $totalBill += $totalPrice;
            echo "<tr>
                    <td>$itemCode</td>
                    <td>$itemName</td>
                    <td>$unitsSold</td>
                    <td>$rate</td>
                    <td>$totalPrice</td>
                  </tr>";
        }
    }
    echo "<tr><td colspan='4'><strong>Total Bill:</strong></td><td><strong>$totalBill</strong></td></tr>";
    echo "</table>";
} else {
   
    echo "<h1>Enter Item Details</h1>";
    echo "<form method='POST' action=''>
            <label for='items'>Enter details of 5 items (item code, item name, units sold, rate):</label><br>
            <textarea name='items' rows='6' cols='60' placeholder='Enter 5 items separated by semicolons. Each item should be in the format: item_code,item_name,units_sold,rate'></textarea><br><br>
            <input type='submit' value='Submit'>
          </form>";
}
?>
//Q3
<html>  
<body>     
    <h2>Select a shape</h2>     
    <form method="POST">         
        <input type="radio" id="triangle" name="shape" value="triangle"  required>         
        <label for="triangle">Triangle</label><br>                  

        <input type="radio" id="square" name="shape" value="square"  required>         
        <label for="square">Square</label><br>          

        <input type="radio" id="rectangle" name="shape" value="rectangle"  required>         
        <label for="rectangle">Rectangle</label><br>          

        <input type="radio" id="circle" name="shape" value="circle"  required>         
        <label for="circle">Circle</label><br><br>          
        <br>         
        <input type="submit" value="Calculate Area">     
    </form>     
</body> 
</html>
<?php  
class Shape {         
    public function displayArea() {         
        echo "general";     
    }   
}  
class Triangle extends Shape {     
    public $base;     
    public $height;      

    public function __construct($base, $height) {         
        $this->base = $base;         
        $this->height = $height;     
    }      

    public function displayArea() {         
        $area = 0.5 * $this->base * $this->height;         
        echo "Area of Triangle: " . $area . " square units.";     
    } 
} 
class Square extends Shape {     
    public $side;      

    public function __construct($side) {         
        $this->side = $side;     
    }      

    public function displayArea() {         
        $area = $this->side * $this->side;         
        echo "Area of Square: " . $area . " square units.";     
    } 
}  
class Rectangle extends Shape {     
    public $length;     
    public $width;      

    public function __construct($length, $width) {         
        $this->length = $length;         
        $this->width = $width;     
    }      

    public function displayArea() {         
        $area = $this->length * $this->width;         
        echo "Area of Rectangle: " . $area . " square units.";     
    } 
}  
class Circle extends Shape {     
    public $radius;      
    public function __construct($radius) {         
        $this->radius = $radius;     
    }      
    public function displayArea() {         
        $area = pi() * $this->radius * $this->radius;         
        echo "Area of Circle: " . $area . " square units.";     
    } 
}  
if ($_SERVER["REQUEST_METHOD"] == "POST") {     
    $shape = $_POST['shape'];      
    if ($shape == 'triangle') {         
         $selectedShape = new Triangle(3, 4);     
    } elseif ($shape == 'square') {         
        $selectedShape = new Square(5);     
    } elseif ($shape == 'rectangle') {         
              
        $selectedShape = new Rectangle(4, 5);     
    } elseif ($shape == 'circle') {         
                
        $selectedShape = new Circle(3);     
    }          
    $selectedShape->displayArea(); 
} 
?>
