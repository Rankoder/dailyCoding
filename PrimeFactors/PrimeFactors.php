<?php

function primeFactors($lastNumber) {
    $array = [];
    $str = null;
    $startNumber = 2;
    
    for($primeNumber = $startNumber; $primeNumber <= $lastNumber; $primeNumber++) { 
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
                    $str .= '('. $primeNumber. '**' . $amount . ')';
                    $array[$primeNumber] = $amount;
                } else {
                    $str .= '(' .$primeNumber. ')';
                }
            };            
        } 
    }
    return $str;
}

function findFirstPrimeNumber($startNumber,$lastNumber) {
    
} 

  //find prime numbers from 1-20