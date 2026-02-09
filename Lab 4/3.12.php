<?php
    function main(){
        $a=4;
        print ("Factorial of ".$a . " is ".factorial($a));
    }
    function factorial ($a){
        if ($a==1)
            return 1;
        return $a*factorial($a-1);
    }
    main();
?>