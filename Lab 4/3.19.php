<?php
    function main(){
    $a = [-2,-3,0,-5,0,6,7,8];
    oddeve($a);
    }
    function oddeve($a){
        $eve = 0;
        $odd = 0;
        $zero = 0;
        foreach ($a as $num){
            if($num> 0) $eve++;
            else if($num < 0) $odd++;
            else $zero++;
        }
        print("Positive : ". $eve ."<br>Negative : ". $odd."<br>Zero : ".$zero);
    }
    main();
?>
