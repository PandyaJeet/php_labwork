<?php
    class db{
        private $con;
        function __construct(){
            $dsn = "mysql:host=localhost;dbname=hello";
            $usn = "root";
            $pass = "";
            $this->con = new PDO($dsn,$usn,$pass);
        }
        function addUser($name,$city){
            $q = "INSERT INTO hello (name,city) VALUES (:nm,:ct)";
            $stmt = $this->con->prepare($q);
            $stmt->bindParam(':nm',$name);
            $stmt->bindParam(':ct',$city);
            $stmt->execute();
        }
        function viewUser(){
            $q = "SELECT * FROM hello";
            $stmt = $this->con->prepare($q);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
    }
?>