<?php
    $n =121;
    $original = $n;
    $temp=1;
    $sum = 0;
    while ((int)$n!=0){
        $temp = $n%10;
        $n = $n/10;
        if ($temp == 0) break;
        $sum = $sum*10 + $temp;
    }
    if ($sum == $original){
        print("Palindrome");
    }
    else{
        print("Not Palindrome");

    } 
    ?>