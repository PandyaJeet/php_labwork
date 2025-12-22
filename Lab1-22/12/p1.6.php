<?php
    $a = 17;
    $flag=0;
    for($i = 2; $i<$a-1;$i++){
        if ($a % $i == 0){
            $flag=1;
            break;
        }
    }
    if ($flag == 1){
        print("<b>"."Not Prime");
    }
    else    
        print("<b>"."Prime");
?>