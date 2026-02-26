<?php
session_start();
require_once 'db/db.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>

<body>
    <form method="post" align="center" id="login" action="login.php">
        <label for="log-user">Username:</label>
        <input type="text" id="log-user" name="txtuser" placeholder="Username"> <br>
        <label for="log-pass">Password:</label>
        <input type="password" id="log-pass" name="password" placeholder="Password"> <br>
        <input type="submit" value="Login">
        <p><a href="register.php">Don't have an account? Signup</a></p>
    </form>

</body>

</html>

<?php
if (isset($_POST['txtuser'])) {
    $db = new Database();

    $username = $_POST['txtuser'];
    $password = $_POST['password'];

    // check if username exists in db
    $sql = "SELECT * FROM db_master WHERE username = '$username'";
    $result = mysqli_query($db->conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // username found, now check password
        $row = mysqli_fetch_assoc($result);

        if ($row['password'] == $password) {
            $_SESSION['username'] = $username;
            $_SESSION['name'] = $row['name'];
            echo "<script>alert('Login successful!'); window.location.href='landing.php';</script>";
        } else {
            echo "<script>alert('Wrong password!');</script>";
        }
    } else {
        echo "<script>alert('Username not found! Please register first.');</script>";
    }
}
?>