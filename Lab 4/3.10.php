<?php
    //sum,pow,prime,max,min,factors,factorial,sort_array,series
    function main(){
        $a = 17;
        $b = 4;
        $arr = [90,80,70,60,50];
        print("Value of A : " . $a);
        print("<br>Value of B : " . $b);
        print("<br>Sum of A & B : " . sum($a,$b));
        print("<br>Power of A & B : " . notpow($a,$b));
        prime($a);
        print("<br>Factorial of B : ". factorial($b));
        sort_array($arr);
        fibo($b);
    }
    function fibo($b){       
        $n = $b;
        $a = 1;
        $b = 1;
        echo $a . " " . $b . " ";
        for ($i = 3; $i <= $n; $i++) {
            $c = $a + $b;
            echo $c . " ";
            $a = $b;
            $b = $c;
        }
    }


    function sort_array ($arr){
        $t=0;
        $n = sizeof($arr);
        print("<br>Before Sort : ");
        print_r($arr);
        for($i = 0 ; $i < $n;$i++){
           $swapped = False; 
            for ($j = 0; $j < $n - $i - 1; $j++){
                if ($arr[$j] > $arr[$j+1]){
                    $t = $arr[$j];
                    $arr[$j] = $arr[$j+1];
                    $arr[$j+1] = $t;
                    $swapped = True;
                }
            }
            if ($swapped == False) break;
        }
        print("<br>After Sort : ");
        print_r($arr);
    }
    function sum($a,$b){
        return $a+$b;
    }
    function notpow($a,$b){
        return $a**$b;
    }
    function prime ($a){
        for($i = 2; $i <$a;$i++){
            if($a%$i == 0){
                print("<br>".$a . " is not a prime number");
                return;
            }
        }
        print("<br>".$a . " is a prime number");
    }
    function factorial($a){
        $temp = 1;
        for ($i = 1; $i <= $a ; $i++){
            $temp = $temp * $i;
        }
        return $temp;
    }
    main();
?>
