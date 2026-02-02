<?php
  $n = 1011;
    $temp = 0;
    $flag =0;
    $sum = 0;
    while ((int)$n != 0){
        $temp = $n%10;
        $n=$n/10;
        if($temp != 0 && $temp != 1){
            $flag = 1;
            break;
        }
    }
    if ($flag == 1)  print("Not Binary");
    else print("Binary");
?>