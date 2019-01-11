<?php

function primeFactors($lastNumber) {
    $result = null;       
    for($primeNumber = 2; $primeNumber <= $lastNumber; $primeNumber++) { 
        $counter = 0; 
        for($j=1;$j<=$primeNumber;$j++) { 
            if($primeNumber % $j == 0) { 
                $counter++;
                $amount = 0;
            }
        }
        if($counter == 2) {
            while($lastNumber % $primeNumber == 0) {
                $lastNumber /= $primeNumber;
                $amount++;               
            }
            if($amount > 0) {
                if($amount > 1) {
                    $result .= addStringWithPrimeNumberAndAmount($primeNumber, $amount);
                    
                } else {
                    $result .= addStringWithPrimeNumber($primeNumber);
                }
            };            
        } 
    }
    return $result;
}

function addStringWithPrimeNumber($primeNumber) {
    return '(' .$primeNumber. ')';
}

function addStringWithPrimeNumberAndAmount($primeNumber, $amount) {
    return '('. $primeNumber. '**' . $amount . ')';
}


