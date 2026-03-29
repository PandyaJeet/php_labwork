<?php
    session_start();
    class ok{
        private $con;
        function __construct(){
            $dsn = "mysql:host=localhost;dbname=hello;";
            $usn = "root";
            $pass = "";
            $this->con = new PDO($dsn,$usn,$pass);
        }
        function displayPrdt(){
            $p = "SELECT * FROM prdt";
            $stmt = $this->con->prepare($p);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
    }
        $o = new ok();
        $prdts = $o->displayPrdt();
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        :root { font-family: Arial, sans-serif; color: #111; background: #f8f8f8; }
        body { margin-top: 10px; padding: 0; }
        .page { max-width: 1100px; margin: 0 auto; padding: 0 16px 32px; }
        header {border-radius:7px;background: #1a73e8; color: #fff; padding: 16px; margin: 0 -16px 16px; }
        .header-inner { display: flex; align-items: center; justify-content: space-between; max-width: 1100px; margin: 0 auto; }
        header h1 { margin: 0; font-size: 24px; }
        nav a { color: #fff; margin-left: 14px; text-decoration: none; font-weight: bold; }
        nav a:hover { text-decoration: underline; }
        main { background: #fff; border: 1px solid #e2e2e2; border-radius: 10px; padding: 20px; box-shadow: 0 2px 6px rgba(0,0,0,0.06); }
        h2 { margin-top: 0; text-align: center; }
        .product-list { display: grid; grid-template-columns: repeat(auto-fit, minmax(240px, 1fr)); gap: 18px; }
        .product-item { text-align:center;align-items: center; background: #fafafa; border: 1px solid #ddd; border-radius: 8px; padding: 14px; box-shadow: 0 2px 4px rgba(0,0,0,0.04); display: flex; flex-direction: column; gap: 8px; }
        .product-item h3 { margin: 0; font-size: 18px; }
        .product-item img { max-width: 60%; height: auto; display: block; border-radius: 6px; }
        .product-item p { margin: 0; }
        .price { font-weight: 700; color: #1a73e8; }
    </style>
</head>
<body>
    <div class="page">
        <header>
            <div class="header-inner">
                <h1>Custom Prints</h1>
                <nav>
                    <a href="index.php">Home</a>
                    <a href="login.php">Login</a>
                    <a href="register.php">Register</a>
                </nav>
            </div>
        </header>
        <main>
            <h2>Our Products</h2>
            <div class="product-list">
                <?php foreach ($prdts as $prdt): ?>
                    <div class="product-item">
                        <h3><?php echo htmlspecialchars($prdt['name']); ?></h3>
                        <p><img src="<?php echo htmlspecialchars($prdt['image_url']); ?>" ?></p>
                        <p><?php echo htmlspecialchars($prdt['description']); ?></p>
                        <p class="price">$<?php echo htmlspecialchars($prdt['price']); ?></p>
                        <button class="button" name="addtocart">Add to Cart</button>
                    </div>
                <?php endforeach; ?>
            </div>
        </main>
    </div>
</body>
</html>