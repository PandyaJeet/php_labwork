<?php
    $students = [
        "24BCA001" => 290,
        "24BCA002" => 200,
        "24BCA003" => 291,
        "24BCA004" => 320,
        "24BCA005" => 209,
        "24BCA006" => 310,
        "24BCA007" => 201,
        "24BCA008" => 300,
        "24BCA009" => 323,
        "24BCA010" => 201
    ];
    $count = 0;
    arsort($students);
    foreach ($students as $number => $value){
        print($number . " as ". $value);
        echo "<br>";
        $count++;
        if ($count == 3)    break;
    }
?>
<!--
    asort : sorts the values;
    ksort : sorts the key 
    arsort : sorts the values in reverse;
    krsort : sorts the key in reverse;

    Take 10 student records with only total. Find Top 3 scorer without losing roll no.  



    -->