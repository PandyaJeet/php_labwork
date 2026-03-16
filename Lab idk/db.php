<?php
    class db{
        private $con;
        function __construct(){
            $dsn = "mysql:host=localhost;dbname=hello";
            $usn = "root";
            $pass = "";
            $this->con = new PDO($dsn,$usn,$pass);
        }
    }
?>