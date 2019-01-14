<?php

function primeFactors($number) {
    divideNumberByPrime(2, $number);
}

function divideNumberByPrime($start, $number) {
    $string = null;
    while($start <= $number) {
        $counter = 0;
        primeCheck($start);    
        while ($number % $start === 0) {       
            $number /= $start; 
            $counter++;
        } 
        $string .= convertToString($counter, $start);    
        $start++;
    }
    return $string;
}

function primeCheck($divider){ 
    if ($divider != 1) {    
        for ($i = 2; $i <= $divider/2; $i++){ 
            if ($divider % $i == 0) 
                break; 
        } 
    return $divider; 
    }
} 

function convertToString($counter, $prime) {
    if($counter === 1) {
        return "(" . $prime . ")";
    } elseif($counter > 1) {
        return "(" . $prime . "**" . $counter . ")";
    }
}
?>