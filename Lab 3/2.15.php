<?php
    $n =85924;
    $temp=1;
    $sum = 0;
    $s=$l = $n%10;
    while ((int)$n!=0){
        $temp = $n%10;
        $n = (int)$n/10;
        if ($l < $temp) $l = $temp;
        if ($s > $temp) $s = $temp;
    }
    print("Small : ".$s." Large : ".$l);    
?>