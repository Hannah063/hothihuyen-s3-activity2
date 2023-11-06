<?php
$n = readline("Enter number: ");
$number = (int)$n;

function factorial($number){
    $result = 1;
    for ($i=2; $i <= $number; $i++) { 
        $result = $result * $i;
    }
    return $result;
}

for ($i=1; $i <= $number; $i++) { 
    echo factorial($i) . " ";
}
?>