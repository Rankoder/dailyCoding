<?php
function find_uniq($a) 
{
    $sameNumber = findThisSameNumber($a);
    foreach($a as $diffNumber){        
        if($diffNumber != $sameNumber){
            return $diffNumber;     
            break;                       
        }
    }        
}

function findThisSameNumber($a)
{
    if($a[0] == $a[1] || $a[0] == $a[2]) {
            $diffNumber = $a[0];
        }else{
            $diffNumber = $a[1]; 
        }
        return $diffNumber;
}
