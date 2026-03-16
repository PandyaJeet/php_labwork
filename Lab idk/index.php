<?php
    require 'db.php';
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
    <center>
        <form method="POST">
            Enter Name : <input type="text" name="tname"> <br><br>
            Enter City : <input type="text" name="tcity"><br><br>
            <input type="submit" name="bsubmit" value="Save">
        </form>
    </center>
</body>
</html>
<?php
    if (isset($_POST['bsubmit'] )){
        $name = $_POST['tname'];
        $city = $_POST['tcity'];
    }
?>