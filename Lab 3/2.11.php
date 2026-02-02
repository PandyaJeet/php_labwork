<?php
    $n =12345;
    $temp=1;
    $sum = 0;
    while($n != 0){
        $temp = $n%10;
        $n = $n/10;
        $sum +=$temp;
    }
    print("Sum is " .$sum);
?>