<?php
    require 'db.php';
    $o = new db();
    $users = $o->viewUser();
    
    //print_r($users);
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
        <form method="POST">
            Enter Name : <input type="text" name="tname"> <br><br>
            Enter City : <input type="text" name="tcity"><br><br>
            <input type="submit" name="bsubmit" value="Save">

        </form>
        <table border='1'>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>City</th>
                <th>Delete</th>
            </tr>
            <tr>
              <?php
                foreach ($users as $user){
                ?>
                <tr>
                    <td><?php print($user['id']);?></td>
                    <td><?php print($user['name']);?></td>
                    <td><?php print($user['city']);?></td>
                    <td><a href="index.php?del=<?php echo $user['id'];?>">Delete</a></td>
                </tr>
                <?php
                }
              ?>  
            </tr>
        </table>        
    </center>
</body>
</html>
<?php
    if (isset($_POST['bsubmit'] )){
        $name = $_POST['tname'];
        $city = $_POST['tcity'];
        $o->addUser($name,$city);
    }

?>