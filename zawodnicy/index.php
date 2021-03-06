<?php
use classes\Route\Route as Route;
use classes\Runner\Runner as Runner;

include './classes/runner.php';
include './classes/route.php';
include './runners.php';

Runner::showRunners($runners);
$runner = Runner::getRunner($runners, 3);

echo "Przed Biegiem <br>";
print_r($runner);
echo "<br>";
echo "Czas Biegu: ";
echo Route::getTime($runner, 1000) . " sekund";
 
die('...');