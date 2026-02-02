<?php
    $n =12345;
    $temp=1;
    $sum = 0;
    while($n != $n/10){
        $temp = $n%10;
        $n = $n/10;
        if ($temp == 0) break;
        $sum = $sum*10 + $temp;
    }
    print($sum);
?>