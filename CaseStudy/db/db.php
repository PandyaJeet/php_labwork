<?php
class Database
{
    public $conn;
    function __construct()
    {
        $host = "localhost";
        $user = "root";
        $pass = "";
        $dbname = "cs_final";

        $this->conn = mysqli_connect($host, $user, $pass, $dbname);

        if (!$this->conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
    }
}
?>