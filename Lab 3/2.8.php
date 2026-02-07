<?php
$x = 3;
$temp = 1 - $x;

for ($i = 2; $i <= 5; $i++) {
    $fact = 1;
    for ($j = 1; $j <= $i; $j++) {
        $fact *= $j;
    }
    if ($i % 2 == 0)
        $temp += pow($x, $i) / $fact;
    else
        $temp -= pow($x, $i) / $fact;
}

echo $temp;
?>
