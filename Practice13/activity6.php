<?
$n = readline("Enter number: ");
$number = (int)$n;
for ($i=1; $i <= $number ; $i++) { 
    for ($j=1; $j <= $i; $j++) { 
        echo "* ";
    }
    echo "\n";
}

for ($i=$number; $i >= 1 ; $i--) { 
    for ($j=1; $j <= $i; $j++) { 
        echo "* ";
    }
    echo "\n";
}
?>