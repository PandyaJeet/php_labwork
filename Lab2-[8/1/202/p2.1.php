<?php
    $sub1 = 80;
    $sub2 = 70;
    $sub3 = 75;
    $sub4 = 65;
    $sub5 = 85;
    $marks= $sub1 + $sub2 + $sub3 + $sub4 + $sub5;
    $percent = ($marks)/5;
    print($percent); 
    echo '<br>';
    switch($percent){
        case $percent>90:
            print("Your grade is O");
            break;
        case $percent>81 && $percent<=90:
            print("Your grade is A+");
            break;
        case $percent>71 && $percent<=80:
            print("Your grade is A");
            break;
        case $percent>61 && $percent<=70:
            print("Your grade is B+");
            break;
        case $percent>51 && $percent<=60:
            print("Your grade is B");
            break;
        case $percent<51:
            print("Fail");
        default:
            print("Retry again");
    }
?>