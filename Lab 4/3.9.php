<?php
    //No args No return type
    function halo (){
        print("Hello World");
    }
    halo();
    //No args, with return type
    function nohalo(){
        return "<br>Not Hello World";
    }
    print(nohalo());
    //With args, with return type
    function hello($a){
        return "<br>".$a .", Hello";
    }
    print(hello("World"));
?>