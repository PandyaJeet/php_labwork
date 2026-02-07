<?php
$n = 4;
$a = 1;
$b = 1;
echo $a . " " . $b . " ";
for ($i = 3; $i <= $n; $i++) {
    $c = $a + $b;
    echo $c . " ";
    $a = $b;
    $b = $c;
}
?>
