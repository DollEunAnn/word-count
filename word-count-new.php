<?php
$paragraph = file_get_contents("alice.txt");

$words = explode(" ",$paragraph);
$result = array_combine($words, array_fill(0, count($words), 0));

foreach($words as $word) {
    $result[$word]++;
}

foreach($result as $word => $count) {
    echo "There are $count instances of $word.\n";
}

?>