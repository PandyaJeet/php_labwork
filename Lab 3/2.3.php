<?php
    $temp=1.00;
    $n=2.00;
for ($i = 1; $i <= $n; $i++) {

    if ($i % 2 == 0) {
        $temp -= 1 / ($i * $i);
    } else {
        $temp += 1 / ($i * $i);
    }
}
    echo $temp . "<br>";
?>