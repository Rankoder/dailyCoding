<?php
function divisors($integer) {
  $divisors = array();
  for($i = 2; $i < $integer; $i++)
    if(!($integer % $i))
      $divisors[] = $i;
    if($divisors != null){
        return $divisors;
    }else{
        return $integer . ' is prime';
    }
}    
