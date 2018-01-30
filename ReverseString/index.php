<?php
    $string = "Hello";
    $reverseString = null;
    echo "$string <br>";
    for($i = 0; $i < strlen($string); $i++){
        $reverseString .= $string[strlen($string) - ($i + 1)];
    }
    echo $reverseString;