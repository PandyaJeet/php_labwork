<?php
    $n = 27;
    $prime = 0;
    for ($i = 2 ; $i< $n;$i++){
        if ($n%$i==0)   $prime = 1;
    }
    if ($prime == 0){
        print("Prime");
    }
    else {
        print("Not Prime");
    }
?>