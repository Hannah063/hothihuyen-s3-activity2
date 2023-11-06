<?php
$n = readline("Enter number: ");
$number = (int)$n;

$isPrime = true;
for ($i = 2; $i < $number; $i++) {
    if ($number % $i == 0) {
        $isPrime = false;
        break;
    }
}

if ($isPrime) {
    echo "$number is a prime.";
} else {
    echo "$number is not a prime.";
}
?>