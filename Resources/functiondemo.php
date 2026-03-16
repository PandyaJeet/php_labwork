<?php
    // No agrument No Return Value
    /*function add()
    {
        $i = 10;
        $j = 20;
        $k = ($i+$j);
        echo "Sum of two numbers is :" . $k;
    }

    add();*/
    // With argument No Return Value
    /*function add($a,$b)
    {
        $c = $a + $b ;
        echo "Sum of two numbers is " . $c;
    }

    add(50,60); */

    // No argument with return value

   /* function add()
    {
        $a = 40;
        $b = 50;

        $c = $a + $b;

        return $c;
    }

    $d = add();
    echo "Sum is ".$d; */


    // With argument with return value

    function add($x, $y)
    {
        return ($x+$y);
    }

    $z = add(100,200);
    echo "Sum is ". $z;
?>