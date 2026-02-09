<?php
    $a1=[50,40,30,20];
    $a2 =[10,9,8,7,6];
    sort($a1);
    sort($a2);
    $a=array_merge($a1,$a2);
    sort($a);
    print_r($a);
?>