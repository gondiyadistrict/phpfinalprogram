<html>
    <body>
        <form method="post">
            Enter a string:<input type="text" name="input"><br><br>
            <input type="submit" name="submit" value="submit">
</form>
<?php
function palindrome($str)
{
    
    if(strrev($str)==$str)
    {
        echo"the string is plalindrome";
    }else{
        echo"the string is not palindrome";
    }



    
}
$a=$_POST['input '];
palindrome($a);



?>
</body>
</html>
//Q3 property owner assingment database que set a q1
<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "property_db";  


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


if (isset($_POST['owner_name'])) {
    $owner_name = $_POST['owner_name'];

   
    $sql = "SELECT p.pno, p.description, p.area
            FROM Property p
            JOIN Owner o ON p.owner_id = o.id
            WHERE o.oname = ?";
    
   
    if ($stmt = $conn->prepare($sql)) {
        
        $stmt->bind_param("s", $owner_name);
        
      
        $stmt->execute();
        
       
        $stmt->bind_result($pno, $description, $area);
        
        
        echo "<h2>Properties owned by $owner_name:</h2>";
        echo "<table border='1'><tr><th>Property No</th><th>Description</th><th>Area</th></tr>";
        
        while ($stmt->fetch()) {
            echo "<tr><td>$pno</td><td>$description</td><td>$area</td></tr>";
        }
        
        echo "</table>";
        
        
        $stmt->close();
    } else {
        echo "Error: Could not prepare the SQL query.";
    }
} else {
    echo '<form method="POST" action="">
            <label for="owner_name">Enter Owner Name:</label>
            <input type="text" name="owner_name" required>
            <input type="submit" value="Search">
          </form>';
}


$conn->close();
?>
//Q2 AJYX

