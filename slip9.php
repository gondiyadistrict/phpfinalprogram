<?php
$num=1;
for($i=1;$i<=4;$i++)
{
  for($j=1;$j<=$i;$j++){
    echo$num;
    $num++;
  }
  echo"\n"."<br>";
}
?>
//Q2
<?php
$stack = [];

function push(&$stack) {
    $element = readline("Enter the element to insert: ");
    array_push($stack, $element);
    echo "Element '$element' inserted into the stack.\n";
}

function pop(&$stack) {
    if (empty($stack)) {
        echo "Stack is empty.\n";
    } else {
        $removed_element = array_pop($stack);
        echo "Element '$removed_element' removed from the stack.\n";
    }
}

function display($stack) {
    if (empty($stack)) {
        echo "Stack is empty!\n";
    } else {
        echo "Current stack elements: \n";
        foreach ($stack as $element) {
            echo "$element\n";
        }
    }
}
function Menu() {
    echo "1. Insert an element in stack.\n";
     echo "2. Delete an element from stack.\n";
     echo "3. Display the stack\n";
     echo "4. Exit\n";
 }
 
while (true) {
    Menu();
    $choice = readline("Enter your choice: ");
    
    switch ($choice) {
        case 1:
            push($stack);
            break;
        case 2:
            pop($stack);
            break;
        case 3:
            display($stack);
            break;
        case 4:
            echo "Exit";
            exit(0);
        default:
            echo "Invalid choice. Please try again\n";
    }
}

?>
//Q3
sale_order