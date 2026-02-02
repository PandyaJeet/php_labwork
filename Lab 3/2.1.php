<?php
    $temp=1;
    $n=4;
    for($i=2;$i<=$n;$i++){
        
        if($i%2==0){
        $temp+=($i*$i);
        echo"<br>";
        print($temp);
        }
        else if ($i%2!=0){
        $temp-=($i*$i);
        echo"<br>";
        print($temp);
        }
    }
?>