<?php
function permutations(string $s): array 
{
    $lenght = strlen($s);
    $permutationsOfCharacters[] = $s;
    $characters = arrayOfCharacters($s);
    $newPermutation = null;
    $tablica[] = null;
    
    $ilePermutacji = obliczPermutacje($s);
    
    while(count($permutationsOfCharacters) != $ilePermutacji){
        
        while(count($tablica) != ($lenght + 1)){
            $char = $characters[rand(0, ($lenght - 1))];
            if(array_search($char, $tablica) != true){
                $tablica[] = $char;       
            }
        }
        
        if(count($tablica) == ($lenght +1)){
            foreach($tablica as $a){
                $newPermutation .= $a;
            }
            
            $permutationsOfCharacters[] = $newPermutation;
            $newPermutation = null;
            unset($tablica);
        }
    }
        
    return $permutationsOfCharacters;
    
}
    

function arrayOfCharacters($s)
{
    for($i = 0; $i < strlen($s); $i++){
        $characters[] = $s[$i];
    }
    return $characters;
}

function obliczPermutacje($s)
{
    $ilePermutacji = 1;
    for($i = 0; $i < strlen($s); $i++){
        $ilePermutacji *= $i;      
    }
}