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

    $b3 = True;
    $i3 = (int)$b3;
    $d3 = (boolean)$b3;
    $s3 = (string)$b3;
    $a3 = (array)$b3;

    $s4 = "Hello World";
    $i4 = (int)$s4;
    $d4 = (double)$s4;
    $b4 = (boolean)$s4;
    $a4 = (array)$s4;

    $a5 = ["Hi"];
    print($a5[0]);
    $i5 = (int)$a5;
    $d5 = (double)$a5;
    $b5 = (boolean)$a5;
    $s5 = (string)$a5;
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

        <tr>
            <td rowspan = "4">b3</td>
            <td rowspan = "4"><?php print(gettype($b3));?></td>
            <td rowspan="4"><?php print($b3)?></td>
            <td><?php print(gettype($d3));?></td><td><?php print($d3)?></td> 
        </tr>
        <tr>
            <td><?php print(gettype($i3));?></td><td><?php print($i3)?></td>
        </tr>
        <tr>
            <td><?php print(gettype($s3));?></td><td><?php print($s3)?></td>
        </tr>
        <tr>
            <td><?php print(gettype($a3));?></td><td><?php print_r($a3)?></td>
        </tr>
        
        <tr>
            <td rowspan = "4">s4</td>
            <td rowspan = "4"><?php print(gettype($s4));?></td>
            <td rowspan="4"><?php print($s4)?></td>
            <td><?php print(gettype($d4));?></td><td><?php print($d4)?></td> 
        </tr>
        <tr>
            <td><?php print(gettype($b4));?></td><td><?php print($b4)?></td>
        </tr>
        <tr>
            <td><?php print(gettype($i4));?></td><td><?php print($i4)?></td>
        </tr>
        <tr>
            <td><?php print(gettype($a4));?></td><td><?php print_r($a4)?></td>
        </tr>

<tr>
            <td rowspan = "4">a5</td>
            <td rowspan = "4"><?php print(gettype($a5));?></td>
            <td rowspan="4"><?php print($a5[0])?></td>
            <td><?php print(gettype($d5));?></td><td><?php print($d5)?></td> 
        </tr>
        <tr>
            <td><?php print(gettype($b5));?></td><td><?php print($b5)?></td>
        </tr>
        <tr>
            <td><?php print(gettype($s5));?></td><td><?php print($s5)?></td>
        </tr>
        <tr>
            <td><?php print(gettype($i5));?></td><td><?php print($i5)?></td>
        </tr>

        </table>
    </center>
</body>