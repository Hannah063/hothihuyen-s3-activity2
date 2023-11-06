<?php
$numbers = readline("Nhập dãy số: ");
$numbersArr = explode(" ", $numbers);

foreach ($numbersArr as $number) {
    if ($number % 2 == 0) {
        echo $number . " ";
    }
}
?>