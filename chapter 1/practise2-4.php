<?
    //Kiểm tra 1 số N có phải là số nguyên tố hay không. In ra màn hình các số nguyên tố < 100
    function check($number){
        for ($i=2; $i < $number; $i++) { 
            if ($number%$i == 0) {
                return false;
            }
        }
        return true;
    }

    echo 1 . " ";
    for ($i=3; $i <= 100; $i++) { 
        if (check($i) == true) {
            echo $i . " ";
        }
    }
?>