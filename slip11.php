<?php
phpinfo();
?>
//Q2
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
//Q3
Subject Code for Web Technology Laboratory: BCA 245
<?xml version="1.0" encoding="UTF-8"?>
<subjects>
    <subject>
        <subject_code>BCA 245</subject_code>
        <subject_name>Web Technology Laboratory</subject_name>
    </subject>
    <subject>
        <subject_code>BCA 246</subject_code>
        <subject_name>Database Management Systems</subject_name>
    </subject>
    <subject>
        <subject_code>BCA 247</subject_code>
        <subject_name>Computer Networks</subject_name>
    </subject>
    <subject>
        <subject_code>BCA 248</subject_code>
        <subject_name>Data Structures</subject_name>
    </subject>
    <subject>
        <subject_code>BCA 249</subject_code>
        <subject_name>Operating Systems</subject_name>
    </subject>
</subjects>



<?php

$xml = simplexml_load_file('subjects.xml');


$found = false;

foreach ($xml->subject as $subject) {
   
    if ((string)$subject->subject_name === "Web Technology Laboratory") {
        
        echo "Subject Code for Web Technology Laboratory: " . $subject->subject_code;
        $found = true;
        break; 
    }
}

if (!$found) {
    echo "Subject 'Web Technology Laboratory' not found.";
}
?>

