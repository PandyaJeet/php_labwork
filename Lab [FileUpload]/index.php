<?php
    class db{
        private $con;
        function __construct(){
            $dsn = "mysql:host=localhost;dbname=hello;";
            $usn = "root";
            $pass = "";
            $this->con=new PDO ($dsn,$usn,$pass);
        }
        function UploadFile($file){
            $filename = $file['name'];
            $fileTmpPath = $file['tmp_name'];
            $dir = "uploads/";
            if (!is_dir($dir)){
                mkdir($dir,0777,true);
            }
            $path = $dir . basename($filename);
            if (move_uploaded_file($fileTmpPath,$path)){
                $p = "INSERT INTO img_db (name,path) VALUES (:nm,:pth)";
                $stmt = $this->con->prepare($p);
                $stmt->bindParam(":pth",$path);
                $stmt->bindParam(":nm",$filename);
                $stmt->execute();
            }
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
            $obj->UploadFile($_FILES['file']);
        }
    }
?>