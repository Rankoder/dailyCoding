<?php

function primeFactors($number) {
   $string = null;
   $start = 2;
    while($start <= $number) {
        $counter = 0;
          
        while ($number % $start === 0) {       
            $number /= $start; 
            $counter++;
        } 
        $string .= convertToString($counter, $start);    
        $start++;
    }
    return $string;
}



function convertToString($counter, $prime) {
    if($counter === 1) {
        return "(" . $prime . ")";
    } elseif($counter > 1) {
        return "(" . $prime . "**" . $counter . ")";
    }
}

$number = 86240;
echo primeFactors($number);
?>