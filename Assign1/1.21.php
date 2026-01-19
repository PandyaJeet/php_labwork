<?php
    $d1 = 100.10;
    $i1 = (int)$d1;
    $b1 = (boolean)$d1;
    $s1 = (string)$d1;
    $a1 = (array)$d1;
    
    $i2 = 20;
    $d2 = (double)$i2;
    $b2 = (boolean)$i2;
    $s2 = (string)$i2;
    $a2 = (array)$i2;

?>

<body>
    <center>
    <table border = "1">
        <tr><th>Variable Name</th><th>Variable type</th><th>Variable Value</th><th>Converted Type</th><th>Converted Value</th></tr>
        <tr>
            <td rowspan = "4">d1</td>
            <td rowspan = "4"><?php print(gettype($d1));?></td>
            <td rowspan="4"><?php print($d1)?></td>
            <td><?php print(gettype($i1));?></td><td><?php print($i1)?></td> 
        </tr>
        <tr>
            <td><?php print(gettype($b1));?></td><td><?php print($b1)?></td>
        </tr>
        <tr>
            <td><?php print(gettype($s1));?></td><td><?php print($s1)?></td>
        </tr>
        <tr>
            <td><?php print(gettype($a1));?></td><td><?php print_r($a1)?></td>
        </tr>

<tr>
            <td rowspan = "4">i2</td>
            <td rowspan = "4"><?php print(gettype($i2));?></td>
            <td rowspan="4"><?php print($i2)?></td>
            <td><?php print(gettype($d2));?></td><td><?php print($d2)?></td> 
        </tr>
        <tr>
            <td><?php print(gettype($b2));?></td><td><?php print($b2)?></td>
        </tr>
        <tr>
            <td><?php print(gettype($s2));?></td><td><?php print($s2)?></td>
        </tr>
        <tr>
            <td><?php print(gettype($a2));?></td><td><?php print_r($a2)?></td>
        </tr>
        </table>
    </center>
</body>