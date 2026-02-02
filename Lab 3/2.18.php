<?php
    $original = 153;
    $n = $original;
    $temp = 0;
    $sum = 0;
    while ((int)$n != 0){
        $temp = $n%10;
        $n=$n/10;
        $sum += pow($temp,3);
    }
    if ($sum == $original)  print("Armstrong");
    else print("Nah");
?>