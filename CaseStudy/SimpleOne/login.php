<?php
    class db{
        private $con;

        function __construct(){
            $dsn = "mysql:host=localhost;dbname=hello;";
            $usn = "root";
            $pass = "";
            $this->con = new PDO($dsn,$usn,$pass);
            $this->con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);//To throw helpful errors
        }
        function emailExists($email){
            $p = "SELECT 1 FROM hello WHERE email = :em LIMIT 1";//Stops at the very first match
            $stmt = $this->con->prepare($p);
            $stmt->bindParam(":em", $email, PDO::PARAM_STR);//To prevent SQL injection,it checks if the input is CHAR, VARCHAR, or other string data type.
            $stmt->execute();
            return (bool) $stmt->fetchColumn();
        }
        function getPasswordForEmail($email){
            $p = "SELECT password FROM hello WHERE email = :em LIMIT 1";//only checks it's password
            $stmt = $this->con->prepare($p);
            $stmt->bindParam(":em", $email, PDO::PARAM_STR);
            $stmt->execute();
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            return $row ? $row['password'] : null;//if $row is found, it returns pass else NULL
        }
    }
    $loginMessage = "";
    if(isset($_POST["btnsubmit"])){
        $o = new db();
        $email = $_POST['email'];
        $password = $_POST['password'];
        if (!$o->emailExists($email)) {//Email's existence is checked
            $loginMessage = "Email not found. Please register first.";
        } else {
            $storedPassword = $o->getPasswordForEmail($email);
            if ($storedPassword !== null && $password === $storedPassword) {
                $loginMessage = "Login successful! Redirecting to Index Page";
                header("Location:index.php");
                exit;
            } else {
                $loginMessage = "Incorrect password.";
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        :root { font-family: Arial, sans-serif; color: #111; background: #f4f6fb; }
        body { margin: 0; padding: 0; display: flex; align-items: center; justify-content: center; min-height: 100vh; }
        .card { background: #fff; border: 1px solid #dce3f0; border-radius: 8px; padding: 24px 28px; box-shadow: 0 2px 6px rgba(0,0,0,0.08); width: 360px; }
        h1 { margin: 0 0 16px; font-size: 20px; text-align: center; }
        form { display: grid; grid-template-columns: 1fr; gap: 12px; }
        label { font-weight: 600; font-size: 14px; }
        input[type="email"], input[type="password"] { width: 100%; padding: 10px; border: 1px solid #c7d2e5; border-radius: 6px; font-size: 14px; }
        input[type="submit"] { background: #1a73e8; color: #fff; border: none; padding: 10px; border-radius: 6px; font-weight: 700; cursor: pointer; }
        input[type="submit"]:hover { background: #155ec0; }
        .message { margin-top: 12px; font-size: 14px; text-align: center; }
    </style>
</head>
<body>
    <div class="card">
        <h1>Login to your account</h1>
        <form action="" method="POST">
            <div>
                <label for="email">Email</label>
                <input id="email" type="email" name="email" required>
            </div>
            <div>
                <label for="password">Password</label>
                <input id="password" type="password" name="password" required>
            </div>
            <input type="submit" name="btnsubmit" value="Login">
        </form>
        <?php if ($loginMessage !== "") { echo "<div class=\"message\">$loginMessage</div>"; } ?>
    </div>
</body>
</html>