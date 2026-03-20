/*
    MySQL db with 4 fields id, with auto increment, name, email and dept. 
    Data has been passed
*/
<?php
    class db{
        private $con;
        function __construct(){
            $dsn="mysql:host=localhost;dbname=hello";
            $usn="root";
            $pass = "";
            $this->con = new PDO($dsn,$usn,$pass);
        }
        function addUser($name,$email,$dept){
            $q = "INSERT INTO hello (name,email,dept) VALUE (:nm,:em,:dp)";
            $stmt = $this->con->prepare($q);
            $stmt->bindParam(':nm',$name);
            $stmt->bindParam(':em',$email);
            $stmt->bindParam(':dp',$dept);
            $stmt->execute();
        }
    }
    $o = new db();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        Name:<br>
        <input type="text" name="txtname" id="">
        Email:<br>
        <input type="email" name="email" id="">
        Department:<br>
        <input type="text" name="txtdept" id="">
        <input type="submit" value="Submit" name="btnsubmit" id="">
    </form>
</body>
</html>
<?php
    if (isset($_POST['btnsubmit'])){
        $name=$_POST['txtname'];
        $email=$_POST['email'];
        $dept=$_POST['txtdept'];
        $o->addUser($name,$email,$dept);
    }
?>