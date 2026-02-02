<?php
    $n =12345;
    $scrap =$n;
    $temp=1;
    $sum = 0;
    $count = 0;
    while((int)$n != 0){
        $count++;
        $temp = $n%10;
        $n = (int)$n/10;
    }
    $i =0;
    $n = $scrap;
    while ((int)$n!=0){
        $i++;
        $temp = $n%10;
        $n = (int)$n/10;
        if ($i == 1 || $i == $count){
            $sum+=$temp;
        }
    }
    print($sum);
?>