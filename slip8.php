<html>
    <body>
        <form method="post">
            Enter a string:<input type="text" name="input"><br><br>
            <input type="submit" name="submit" value="submit">
</form>
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
$a=$_POST['input'];
palindrome($a);
?>
</body>
</html>
//Q2
<?php
$cars=array(
    array("Volvo",22,18),
    array("BMW",15,13),
    array("Saab",5,2),
    array("Land Rover",17,15)
);
echo $cars[0][1];
unset($cars[0][1]);
print_r($cars);
?>
//Q3
AJYX program to fetch information