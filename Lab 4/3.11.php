<?php
    $num = 10;
    $n = $num;
    #include <stdio.h>
    int n, binary[32], i = 0;
    while (n > 0) {
        binary[i] = n % 2;
        n = n / 2;
        i++;
    }
    for(;n>0;n=n/2){
        $a[$i++] =  n%2;

    }

    printf("Binary: ");
    for (int j = i - 1; j >= 0; j--) {
        printf("%d", binary[j]);
    }

    return 0;

?>