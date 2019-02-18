<?php 
function stray($arr) {
    $sameNumber = findThisSameNumber($arr);
    foreach($arr as $diffNumber) {        
        if($diffNumber != $sameNumber) 
            return $diffNumber;                          
    }        
}

function findThisSameNumber($arr) {
    if($arr[0] == $arr[1] || $arr[0] == $arr[2]) {
        $diffNumber = $arr[0];
    } else {
        $diffNumber = $arr[1]; 
    }
    return $diffNumber;
}
