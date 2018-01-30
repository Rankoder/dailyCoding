<?php

function ipv4_address($address){
    $cutAddress = explode('.',$address);
    
    if(count($cutAddress) != 4)
        return false;
    
    for ($i = 0; $i < 4; $i++){
        $onePartAddress = $cutAddress[$i];
        for($j = 0; $j < strlen($onePartAddress); $j++){
            if(!is_numeric($onePartAddress[$j]))
            return false;
        }
        
        if ($onePartAddress == '')
            return false;
        
        $onePartAddresAsInt = (int)$onePartAddress;
        if ($onePartAddresAsInt > 255 || $onePartAddresAsInt < 0)
          return false;
        
        if ($onePartAddresAsInt != 0 && $onePartAddress[0] =='0')
          return false;
            
        if ($onePartAddresAsInt == 0 && strlen($onePartAddress) != 1)
          return false;
    }
    return true;
}
