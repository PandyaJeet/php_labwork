<?php
$d1 = date_create("2026-02-01");
$d2 = date_create("2026-01-01");

$diff = date_diff($d1, $d2);

echo $diff->format('%m months, %d days');
?>
