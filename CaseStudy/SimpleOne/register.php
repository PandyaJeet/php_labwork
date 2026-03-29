<?php
    class db{
        private $con;
        function __construct(){
            $dsn = "mysql:host=localhost;dbname=hello;";
            $usn = "root";
            $pass = "";
            $this->con = new PDO($dsn,$usn,$pass);
        }
        function NewUser($txtusr,$email,$txtpass){
            $p = "INSERT INTO hello(username,email,password) VALUES (:un,:em,:pass)";
            $stmt = $this->con->prepare($p);
            $stmt->bindParam(":un",$txtusr);
            $stmt->bindParam(":em",$email);
            $stmt->bindParam(":pass",$txtpass);
            $stmt->execute();
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
        .card { background: #fff; border: 1px solid #dce3f0; border-radius: 8px; padding: 24px 28px; box-shadow: 0 2px 6px rgba(0,0,0,0.08); width: 420px; }
        h1 { margin: 0 0 16px; font-size: 20px; text-align: center; }
        form { display: grid; grid-template-columns: 1fr; gap: 12px; }
        label { font-weight: 600; font-size: 14px; }
        input[type="text"], input[type="email"], input[type="password"] { width: 100%; padding: 10px; border: 1px solid #c7d2e5; border-radius: 6px; font-size: 14px; }
        input[type="submit"] { background: #1a73e8; color: #fff; border: none; padding: 10px; border-radius: 6px; font-weight: 700; cursor: pointer; }
        input[type="submit"]:hover { background: #155ec0; }
    </style>
</head>
<body>
    <div class="card">
        <h1>New User Registration</h1>
        <form action="" method="POST">
            <div>
                <label for="txtusr">Name</label>
                <input id="txtusr" type="text" name="txtusr" required>
            </div>
            <div>
                <label for="email">Email</label>
                <input id="email" type="email" name="email" required>
            </div>
            <div>
                <label for="txtpass">Password</label>
                <input id="txtpass" type="password" name="txtpass" required>
            </div>
            <input type="submit" name="btnsubmit" value="Submit">
        </form>
    </div>
</body>
</html>
<?php
    if(isset($_POST["btnsubmit"])){
        $o = new db();
        $o->NewUser($_POST['txtusr'],$_POST['email'],$_POST['txtpass']);
    }
?>