<?php

$s = '12';
$lenght = strlen($s);
$permutations = permutation($lenght);
$charsAppearance = $permutations / strlen($s);
$arrStr[] = $s;

for($i = 0; $i < $lenght; $i++){
   $arrChar[] =  $s[$i]; 
}



function permutation($lenght)
{
    $permutations = 1;
    
    for($i = 1; $i <= $lenght; $i++){
         $permutations *= $i;
    }
    return $permutations;
}
echo "Znaki do permutacji: $s";
echo "<br>";
echo "Ilość permutacji: $permutations";
echo "<br>";
echo "Ilość wystąpień jednego znaku: $charsAppearance";
echo "<br>";
echo "Ilość znaków: $lenght";
echo "<br>";
echo "Lista znaków: ";

foreach($arrChar as $word){
    echo "$word, \n";
}

$oneStr = $arrStr[0];
$secondStr = null;
$i = $lenght;

while(strlen($secondStr) != $lenght){
    $secondStr .= $arrChar[$i - 1];
    $i--;    
}

if($secondStr != $oneStr){
    $arrStr[] = $secondStr;
}

echo "<br>";
echo "Znaki po permutacji: $secondStr";
echo "<br>";
echo "Lista permutacji: ";
echo "<br>";

foreach($arrStr as $word=>$key){
    echo ($word + 1).": $key";
    echo "<br>";
}