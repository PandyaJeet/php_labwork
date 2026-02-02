<?php
    $n= 3;
    $s=1;
    for ($i = 1;$i<=$n;$i++){
        print($s*$i+$i."<br>");
        $s =($i*$i+$i);
    }
?>
