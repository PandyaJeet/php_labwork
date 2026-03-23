<?php
    class db{
        private $con;
        function __construct(){
            $dsn="mysql:host=localhost;dbname=hello";
            $usn="root";
            $pass="";
            $this->con = new PDO ($dsn,$usn,$pass);
        }
        function addUsers($title,$author,$genre,$year){
            $p = "INSERT INTO hello (title,author,genre,year) VALUES (:tt,:at,:gn,:yr)";
            $stmt = $this->con->prepare($p);
            $stmt->bindParam(":tt",$title);
            $stmt->bindParam(":at",$author);
            $stmt->bindParam(":gn",$genre);
            $stmt->bindParam(":yr",$year);
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
                <td>Title</td>
                <td><input type="text" name="txttitle"></td>
                <td>Author</td>
                <td><input type="text" name="txtauthor"></td>
                <td>Genre</td>
                <td><input type="text" name="txtgenre"></td>
                <td>Year</td>
                <td><input type="year" name="year"></td>
                <td colspan="2"><input type="submit" name="btnsubmit"></td>    
            </form>
            </tr>
            <?php
                foreach ($users as $user){
                    ?>
                    <tr>
                        <td><?php echo($user['id']);?></td>
                        <td><?php echo($user['title']);?></td>
                        <td><?php echo($user['author']);?></td>
                        <td><?php echo($user['genre']);?></td>
                        <td><?php echo($user['year']);?></td>
                        <td><a href="book.php?del=<?php echo $user['id'] ?>">Delete</a></td>
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
        $title=$_POST['txttitle'];
        $author=$_POST['txtauthor'];
        $genre=$_POST['txtgenre'];
        $year=$_POST['year'];
        $o->addUsers($title,$author,$genre,$year);
        header("Location:book.php");
        exit();
    }
    if(isset($_GET['del'])){
        $id =$_GET['del'];
        $o->delete($id);
        header("Location:book.php");
        exit();        
    }
?>