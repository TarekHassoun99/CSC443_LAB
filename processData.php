<?php

// Exercise 7
// Create a “tasks.txt” file containing tasks from Monday till Friday in the following manner:“Monday: Clean,Cook,Play
// ,...,...”(9 tasks total)“Tuesday: ...,...,...”(9 tasks total)....“Sunday: ...,...,...”(9 tasks total)Create a PHP 
// page “process.php” that contains a function processData($filename) that takes a filename, and returns a multidimensional
// array in the following format:Row1: Clean Cook Play ... ... ... (Monday tasks)Row2: .........     ... ... ... (Tuesday tasks)
// ...Row7: .........     ... ... ... (Sunday tasks)

$arrFile = file("tasks.txt", FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

foreach($arrFile as $line) {
$line = preg_split('/[\s,:]/', $line);
$temp = "(".$line[0]." tasks)";
array_shift($line);
$line[] = $temp; //Alternatively, I can use array_push(), where I to insert more than one element in one go (I should try note writing more often)

}

?>