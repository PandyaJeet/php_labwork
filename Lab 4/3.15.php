<?php
    function main(){
    $a = [2,3,4,5,6,7,8];
    oddeve($a);
    }
    function oddeve($a){
        $eve = 0;
        $odd = 0;
        foreach ($a as $num){
            if($num%2 == 0) $eve++;
            else $odd++;
        }
        print("Odd : ". $odd ."<br>Even : ". $eve);
    }
    main();
?>
