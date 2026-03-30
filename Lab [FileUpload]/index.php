<?php
    class db{
        private $con;
        function __construct(){
            $dsn = "mysql:host=localhost;dbname=hello;";
            $usn = "root";
            $pass = "";
            $this->con=new PDO ($dsn,$usn,$pass);
        }
        function UploadImg($path){
        }
    }
    $obj = new db();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" enctype="multipart/form-data">
    <input type="file" name="file" ><br>
    <input type="submit" value="Upload" name="btnupload">    
</form>
</body>
</html>
<?php
    if(isset($_POST['btnupload'])){
        if($_SERVER['REQUEST_METHOD']==='POST' && isset($_FILES['file'])){
            $obj->UploadImg($_FILES['file']);
        }
    }
?>