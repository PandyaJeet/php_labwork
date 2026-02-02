<?php
  $n = 1011075649;
    $temp = 0;
    $flag =0;
    $sum = 0;
    while ((int)$n != 0){
        $temp = $n%10;
        $n=$n/10;
        if($temp == 8 || $temp == 9){
            $flag = 1;
            break;
        }
    }
    if ($flag == 1)  print("Not Octal");
    else print("Octal");
?>