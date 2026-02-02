<?php
    $n =23569;
    $temp=1;
    $sum = 0;
    while($n != 0){
        $temp = $n%10;
        if($n%10)
        $n = $n/10;
        $sum +=$temp;
    }
    print("Sum is " .$sum);
?>