<?php
$x = 3;
$temp = $x;  
for ($i = 2; $i <= 5; $i++) {
    $fact = 1;
    for ($j = 1; $j <= $i; $j++) {
        $fact *= $j;
    }
    $temp += pow($x, $i) / $fact;
}

echo $temp;
?>
