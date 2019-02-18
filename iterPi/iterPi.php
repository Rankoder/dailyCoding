<?php
function iterPi($epsilon) {
    $result = 0;
    $counter = 1;
    $denominator = 1;
    $diff = 1;
    $countIterations = 0;
   
    while($diff > $epsilon) {
        $result += $counter / $denominator * 4;
        $diff = abs($result - pi());
        $counter = -$counter;
        $denominator += 2;
        $countIterations += 1;
    }       
    return [$countIterations, round($result, 10)];
}  
