<?php
show_source("hello.php");
?>
//Q2
<?php
function insert(&$queue, $element) {
    array_unshift($queue, $element);  
    echo "Element $element inserted into the queue.\n";
}
function delete(&$queue) {
    
        $removed_element = array_shift($queue); 
        echo "Element $removed_element removed from the queue.\n";
    
}
function display($queue) {
    if (empty($queue)) {
        echo "Queue is empty.\n";
    } else {
        echo "Current Queue: " . implode(", ", $queue) . "\n";
    }
}

function main() {
    $queue = [];

    while (true) {
       
        echo "\nMenu:\n";
        echo "1. Insert element into queue\n";
        echo "2. Delete element from queue\n";
        echo "3. Display queue\n";
        echo "4. Exit\n";
        
        
        $choice = (int)readline("Enter your choice: ");
        
        switch ($choice) {
            case 1:
                $element = (int)readline("Enter element to insert: ");
                insert($queue, $element);
                break;
            case 2:
                delete($queue);
                break;
            case 3:
                display($queue);
                break;
            case 4:
                echo "Exiting the program.\n";
                exit;
            default:
                echo "Invalid choice. Please try again.\n";
        }
    }
}
main();
?>
//Q3
<?php
$xml = new SimpleXMLElement('<cricket/>');

$player1 = $xml->addChild('player');
$player1->addChild('name', 'Abe');
$player1->addChild('runs', '120');
$player1->addChild('wickets', '20');

$player2 = $xml->addChild('player');
$player2->addChild('name', 'John');
$player2->addChild('runs', '95');
$player2->addChild('wickets', '30');

$player3 = $xml->addChild('player');
$player3->addChild('name', 'Sam');
$player3->addChild('runs', '150');
$player3->addChild('wickets', '10');

$player4 = $xml->addChild('player');
$player4->addChild('name', 'Tom');
$player4->addChild('runs', '80');
$player4->addChild('wickets', '25');

$player5 = $xml->addChild('player');
$player5->addChild('name', 'Harry');
$player5->addChild('runs', '130');
$player5->addChild('wickets', '15');

$xml->asXML('players.xml');
$xml = simplexml_load_file('players.xml');
echo "<h2>Players who have scored more than 100 runs:</h2>";

foreach ($xml->player as $player) {
    if ((int)$player->runs > 100) {
        echo "<b>Name:</b> " . $player->name . "<br>";
        echo "<b>Runs:</b> " . $player->runs . "<br>";
        echo "<b>Wickets:</b> " . $player->wickets . "<br><br>";
    }
}
?>

 