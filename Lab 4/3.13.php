<?php
    function main(){
        $a=4;
        factorial($a,1);
    }
    function factorial ($a,$i){
        if ($i==11)
            return 1;
        print($a . " * "  . $i . " = " .$a * $i."<br>");
        return $a*factorial($a,$i+1);
    }
    main();
?>