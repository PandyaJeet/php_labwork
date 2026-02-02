<?php
    $x = 3;
    $temp = $x;
    $tem = 0;
    $fact=1;
    for ($i = 2; $i <= $x;$i++){
        $fact=1;
        for ($j=$i;$j>0;$j--){
            $fact*=$j;
        }
        $temp += ($x^$i/$fact); 
    }
    
    print($temp);
?>