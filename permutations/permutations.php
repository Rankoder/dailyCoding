<?php 
function permutations(string $s): array 
{
         
}

$s = '123';
$lenght = strlen($s);

function permutation($lenght)
{
    $permutations = 1;
    
    for($i = 1; $i <= $lenght; $i++){
         $permutations *= $i;
    }
    return $permutations;
}

$permutations = permutation($lenght);
$charsAppearance = $permutations / strlen($s);

for($i = 0; $i < $lenght; $i++){
   $arrStr[] =  $s[$i]; 
}

echo "Ilość permutacji: $permutations";
echo "<br>";
echo "Ilość wystąpień jednego znaku: $charsAppearance";
echo "<br>";
echo "Lista znaków: ";
foreach($arrStr as $word){
    echo "$word, \n";
}
 
