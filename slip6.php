<?php
function isPrime($number) {
    if ($number <= 1) {
        return false;
    }
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            return false;
        }
    }
    return true;
}

$number = intval(readline("Enter a number: "));

if (isPrime($number)) {
    echo "$number is a prime number.";
} else {
    echo "$number is not a prime number.";
}
?>
//Q2
<?php
$assoc_array=array("apple"=>10,"banana"=>20,"cherry"=>30,"date"=>40);
function reverse_key_value($array) 
{
    return array_flip($array);
}
function traverse($array)
{
    shuffle($array);
    foreach($array as $key=>$value)
    {
        echo"$key:$value\n";

    }
}

function menu()
{
    global $assoc_array;
    while(true)
    {
        echo"\nMenu:\n";
        echo "1.Reverse the order\n";
        echo"2.Traverse the element in random order:";
        echo"3.Exit\n";
        $choice=readline("Enter your choice(1/2/3):");
        switch($choice)
        {
            case 1:
                echo "Reverse key - value pairs:\n";
                $reversedarray=reverse_key_value($assoc_array);
                print_r($reversedarray);
                break;
                case 2: 
                    echo "array traverse in random order\n";
                    traverse($assoc_array);  
                    break;
                    case 3:
                        echo"Exiting the program.\n";
                        exit();
                        default:
                        echo"Invalid choice.Please try again.\n";
                        break;

        }
    }
}
menu();
?><?php
$assoc_array=array("apple"=>10,"banana"=>20,"cherry"=>30,"date"=>40);
function reverse_key_value($array) 
{
    return array_flip($array);
}
function traverse($array)
{
    shuffle($array);
    foreach($array as $key=>$value)
    {
        echo"$key:$value\n";

    }
}

function menu()
{
    global $assoc_array;
    while(true)
    {
        echo"\nMenu:\n";
        echo "1.Reverse the order\n";
        echo"2.Traverse the element in random order:";
        echo"3.Exit\n";
        $choice=readline("Enter your choice(1/2/3):");
        switch($choice)
        {
            case 1:
                echo "Reverse key - value pairs:\n";
                $reversedarray=reverse_key_value($assoc_array);
                print_r($reversedarray);
                break;
                case 2: 
                    echo "array traverse in random order\n";
                    traverse($assoc_array);  
                    break;
                    case 3:
                        echo"Exiting the program.\n";
                        exit();
                        default:
                        echo"Invalid choice.Please try again.\n";
                        break;

        }
    }
}
menu();
?>
//Q3AJYX