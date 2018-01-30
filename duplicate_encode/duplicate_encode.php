<?php
function duplicate_encode($word){
    $word = strtolower($word);
    $newString = null;
    for($i = 0; $i < strlen($word); $i++){
        if(substr_count($word, $word[$i]) > 1){
            $newString .= ")";
        }else{
            $newString .= "(";
        }       
    }
    return $newString;
}    
