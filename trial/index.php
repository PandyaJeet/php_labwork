<?php
    class db{
        private $con;
        function __construct(){
            $dsn="mysql:host=localhost;dbname=hello";
            $usn="root";
            $pass="";
            $this->con = new PDO ($dsn,$usn,$pass);
        }
        function addUsers($name){
            $p = "INSERT INTO hello (name) VALUES (:nm)";
            $stmt = $this->con->prepare($p);
            $stmt->bindParam(":nm",$name);
            $stmt->execute();
        }
        function display(){
            $p = "SELECT * FROM hello";
            $stmt = $this->con->prepare($p);
            $stmt->execute();
            return $stmt->fetchALL(PDO::FETCH_ASSOC);
        }
        function delete($id){
            $p="DELETE FROM hello WHERE id=(:id)";
            $stmt=$this->con->prepare($p);
            $stmt->bindParam(":id",$id);
            $stmt->execute();
        }
    }
    $o = new db();
    $users = $o->display();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
        <table>
            <tr>
                <form action="" method="POST"> 
                <td>
                    Name
                </td>
                <td><input type="text" name="txtname"></td>
                <td colspan="2"><input type="submit" name="btnsubmit"></td>    
            </form>
            </tr>
            <?php
                foreach ($users as $user){
                    ?>
                    <tr>
                        <td><?php echo($user['id']);?></td>
                        <td><?php echo($user['name']);?></td>
                        <td><a href="h.php?del=<?php echo $user['id'] ?>">Delete</a></td>
                    </tr>
                    <?php
                }
            ?>
        </table>
    </center>
</body>
</html>
<?php
    if (isset($_POST['btnsubmit'])){
        $name=$_POST['txtname'];
        $o->addUsers($name);
        header("Location:h.php");
        exit();
    }
    if(isset($_GET['del'])){
        $id =$_GET['del'];
        $o->delete($id);
        header("Location:h.php");
        exit();        
    }
?>