<?php
function revRot($s, $sz, $stringAfterChange = null) {
    if(checkException($s, $sz) !== true) {                
        foreach(getCutString($s, $sz) as $s) {
            if(checkChunkIsDivisibleByTwo($s, $sz) === true) {
                $stringAfterChange .= reverseCutString($sz, $s);
            } else {
                $stringAfterChange .= rotateToLeftOnePosition($sz, $s);
            }
        }
        return $stringAfterChange;
    } else {
        return "";
    }
}

function getCutString($s, $sz) {
    $numberOfChunk = floor(strlen($s) / $sz);
    $oneChunk = null;
    $markedNumber = 0; 

    for($i = 0; $i < $numberOfChunk; $i++) {            
        for($j = 0 ; $j < $sz; $j++) {
            $oneChunk .= $s[$markedNumber];
            $markedNumber++;
        }
        
        $chunks[$i] = $oneChunk;
        $oneChunk = null;
    }
    return $chunks;
}

function checkException($s, $sz) {
    if($s === "" || $sz <= 0 || $sz > strlen($s)) {
        return true;
    }    
}

function checkChunkIsDivisibleByTwo($s, $sz) {   
    $sum = 0;
    for($i = 0; $i < $sz; $i++) {
        $sum += $s[$i];
    }
    
    if($sum % 2 == 0) {
        return true;
    } else {
        return false;       
    }
}

function reverseCutString($sz, $s, $string = null) {
    for($i = 0; $i < $sz; $i++) {
        $string .= $s[$sz - ($i + 1)];
    }
    return $string;
}

function rotateToLeftOnePosition($sz, $s, $string = null) {
    for($i = 0; $i < $sz - 1; $i++) {
        $string .= $s[$i + 1];
    }
    return $string .= $s[0];
}
