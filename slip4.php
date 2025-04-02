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
?>
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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AJAX Read File and Print</title>
    <script>
        
        function readFileAndPrint() {
          
            var xhr = new XMLHttpRequest();
            
        
            xhr.open("GET", "example.txt", true);
            
    
            xhr.onreadystatechange = function() {
                if (xhr.readyState == 4 && xhr.status == 200) {
                   
                    var fileContent = xhr.responseText;
                    
                    console.log(fileContent);
                
                    document.getElementById("fileContent").innerText = fileContent;
                }
            };
            xhr.send();
        }
    </script>
</head>
<body>
    <h1>AJAX File Reader</h1>
    
    <button onclick="readFileAndPrint()">Print File</button>
    
    
    <div id="fileContent" style="margin-top: 20px; font-family: monospace; background-color: #f0f0f0; padding: 10px; border: 1px solid #ccc;"></div>
</body>
</html>
