<?php
    main();
    function main(){
        decimal();
        bin();
        hexa();
    }
    function decimal(){
        $num = 100;
        print("Binary Number : ".$num);
        print("<br>Decimal to Binary ".decbin($num));
        print("<br>Decimal to Octal ".decoct($num));
        print("<br>Decimal to Hexadecimal ".dechex($num));
    }
    function bin(){        
        $num = 100;
        print("Binary Number : ".$num);
        print("<br>Binary to Decimal ".bindec($num));
        print("<br>Binary to Hexadecimal ".bin2hex($num));
    }
    function hexa(){
    $num = "1ae2";
    print("Hexadecimal Number : ".$num);
    print("<br>Hexadecimal to Binary ". hex2bin($num));
    print("<br>Hexadecimal to Decimal ".hexdec($num));
    }
?>