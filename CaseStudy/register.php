<?php
session_start();
require_once 'db/db.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>
</head>

<body>
    <form method="post" align="center" id="register" action="register.php">
        <label for="reg-user">Username:</label>
        <input type="text" id="reg-user" name="txtuser" placeholder="Username"> <br>
        <label for="reg-name">Name:</label>
        <input type="text" id="reg-name" name="txtname" placeholder="Name"> <br>
        <label for="reg-email">Email:</label>
        <input type="text" id="reg-email" name="txtemail" placeholder="Email"> <br>
        <label for="reg-mobile">Mobile:</label>
        <input type="number" id="reg-mobile" name="txtmobile" placeholder="Mobile"> <br>
        <label for="reg-pass">Password</label>
        <input type="password" id="reg-pass" name="password" placeholder="Password"> <br>
        <input type="submit" value="Register">
    </form>

</body>

</html>

<?php
if (isset($_POST['txtuser'])) {
    $db = new Database();

    $username = $_POST['txtuser'];
    $name = $_POST['txtname'];
    $email = $_POST['txtemail'];
    $mobile = $_POST['txtmobile'];
    $password = $_POST['password'];

    $sql = "INSERT INTO db_master (username, name, email, mobile, password) 
            VALUES ('$username', '$name', '$email', '$mobile', '$password')";

    $result = mysqli_query($db->conn, $sql);

    if ($result) {
        echo "<script>alert('Registration successful!'); window.location.href='login.php';</script>";
    } else {
        echo "<script>alert('Registration failed!');</script>";
    }
}
?>