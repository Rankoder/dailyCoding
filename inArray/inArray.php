<?php
function inArray($array1, $array2) 
{
    $result = [];
    for($i = 0; $i < count($array1); $i++){
        for($j = 0; $j < count($array2); $j++){
            if(strpos($array2[$j], $array1[$i]) !== false){
                if(array_search($array1[$i], $result) === false){
                $result[] = $array1[$i];
                }                
            }
        }
    }
    sort($result);
    return $result;
}
