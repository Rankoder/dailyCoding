<?php
use classes\Route\Route as Route;
use classes\Runner\Runner as Runner;

include './classes/runner.php';
include './classes/route.php';
include './runners.php';

Runner::showRunners($runners);
$runner = Runner::getRunner($runners, 2);

echo "Przed Biegiem <br>";
print_r($runner);

echo Route::getTime($runner);

die('...');
