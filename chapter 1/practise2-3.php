<?
    function factorial($number){
        $result = 1;
        for ($i=2; $i <= $number; $i++) { 
            $result = $result * $i;
        }
        return $result;
    }

    for ($i=1; $i <= 15; $i++) { 
        echo factorial($i) . " ";
    }
?>