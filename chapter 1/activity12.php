<?php
    // Complete the function to find max in array of numbers
    function findMax ($array) {
        $maxNumber = 0;
        $arrLenght = count($array);
        for ($i=0; $i < $arrLenght; $i++) { 
            if ($maxNumber < $array[$i]){
                $maxNumber = $array[$i];
            }
        }
        return $maxNumber;
    }

    // An array of numbers
    $array = [5, 2, 10, 3, 6];

    // Find and display the max in the array
    echo "Max number in array is ". findMax($array);

?>