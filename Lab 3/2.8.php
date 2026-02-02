<?php
    $x = 3;
    $temp = 1 - $x;
    $tem = 0;
    $fact=1;
    for ($i = 2; $i <= $x;$i++){
        $fact=1;
        for ($j=$i;$j>0;$j--){
            $fact*=$j;
        }
        if ($i%2 == 0)        $temp += (pow($x,$i)/$fact); 
        else $temp -= (pow($x,$i)/$fact);
    }
    
    print($temp);
?>