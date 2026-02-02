<?php
    $temp=0.00;
    $n=2.00;
    for($i=1.00;$i<=$n;$i++){
        
        if($i%2==0){
        $temp-=(1/$i*$i);
        echo"<br>";
        print($temp);
        }
        else if ($i%2!=0){
        $temp+=(1/$i*$i);
        echo"<br>";
        print($temp);
        }
    }
?>