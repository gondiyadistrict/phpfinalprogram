//Q.1
<?php
phpinfo();
?>

//Q.2
<html>
    <body>
        <form method="post">
            Enter a number:<input type="text" name="input">
            <input type="submit" name="submit" value="convert">
</form>
<?php
$count=0;
$character=$_POST['input'];
$char=str_split((string)$character);
foreach($char as $char){
    switch($char)
    {
        case"a":
        $count++;
        break;
        case"e":
        $count++;
        break;
        case"i":
        $count++;
        break;
        case"e":
        $count++;
        break;
        case"A":
        $count++;
        break;
        case"E":
        break;
        case"I":
        $count++;
        break;
        case"O":
        $count++;
        break;
        case"U":
        break;
    }
}
    echo"count".$count;

?>
//occurencevowels
//occurencevowels
<form method="post">
    Enter a string:<input type="text" name="input">
    <input type="submit" name="submit" value="count">
</form>
<?php

function countVowels($string){
    $vowelcount=preg_match_all('/[aeiouAEIOU]/',$string);
    return $vowelcount;
}
$string="hello world";
echo "Number of vowels in'$string': ".countvowels($string);
?>

//Q.3
<?php
$assoc_array1=array("apple"=>10, "banana"=>20,"cherry"=>30, "date"=>40);
$assoc_array2=array("apple"=>50, "orange"=>60, "kivi"=>70, "dragonfruit"=>80);
function merge($array1, $array2) {
    return array_merge($array1, $array2);

}
function intersection($array1, $array2) {
    return array_intersect($array1, $array2);
}

function unionarr($array1, $array2) {
    return $array1 + $array2;
}    
function difference($array1, $array2) {
    return array_diff($array1, $array2);
}
do{
    
    echo "\nMenu:\n";
    echo "1. Merge two arrays\n";
    echo "2. Find intersection of two arrays\n";
    echo "3. Find union of two arrays\n";
    echo "4. Find set difference of two arrays\n";
    echo "5. Exit\n";
    echo"Enter your choice:";
    $choice=intval(trim(fgets(STDIN)));
    switch($choice)
    {
        case 1:
            print_r(merge($assoc_array1, $assoc_array2));
            break;
        case 2:
            print_r(intersection($assoc_array1, $assoc_array2));
            break;
            
        case 3:
            print_r(unionarr($assoc_array1, $assoc_array2));
            break;
        case 4:
            print_r(difference($assoc_array1, $assoc_array2));
            break;
        case 5:
            echo"exiting program.\n";
            break;
            default:
            echo"invalid choice.";


    }
}while($choice=5);
?>