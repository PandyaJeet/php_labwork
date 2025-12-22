<?php 
    $a = 10;
    $b = 100;
    echo "<b>","A: ","$a","<br>";
    echo "B: ","$b","<br>","<br>";
    $temp = $a;
    $a = $b;
    $b = $temp;
    echo "<b>","A: ","$a","<br>";
    echo "B: ","$b","<br>";
?>