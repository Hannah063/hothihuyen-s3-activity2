<?php

	// This associative array stores information about a fruit
    $fruit = ['name' => 'mango', 'quantity' => 15, 'price' => 10, 'country' => "Cambodia"];
	
	// TODO  : print the information about this fruit as follows:
    $output = "{$fruit["quantity"]} {$fruit["name"]} from {$fruit["country"]} cost {$fruit["price"]}$";   //  You need to change this line  !
	
    echo $output;
?>