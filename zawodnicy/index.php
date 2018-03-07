<?php
include './runners.php';
include './runner.php';
include './route.php';

$championship = new Route();
$championship->showRunners($runners);

$runner = ($championship->getRunner($runners, 2));
echo "Przed Biegiem <br>";
print_r($runner);

echo $championship->getTime($runner);

 
die('...');
