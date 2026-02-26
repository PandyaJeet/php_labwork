<?php
session_start();
require_once 'db/db.php';

if (!isset($_SESSION['username'])) {
    echo "<script>alert('Please login first!'); window.location.href='login.php';</script>";
    exit;
}

$name = $_SESSION['name'];

// add to cart logic
if (isset($_GET['add'])) {
    $product_id = $_GET['add'];
    $_SESSION['cart'][] = $product_id;
    echo "<script>alert('Added to cart!'); window.location.href='landing.php';</script>";
    exit;
}

// fetch all products from db
$db = new Database();
$sql = "SELECT * FROM products";
$result = mysqli_query($db->conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing</title>
    <link rel="stylesheet" href="./styles/landing.css">
</head>

<body>
    <div align="center" class="nav">
        <div class="hello">
            <h1>Hello, <?php echo $name; ?>!</h1>
            <div>
                <a href="product_cart.php" class="logoutbtn" style="text-decoration:none; padding:8px 15px;">Cart</a>
                <button class="logoutbtn">Logout</button>
            </div>
        </div>
    </div>
    <div class="main">
        <div class="hero">
            <img src="https://i.pinimg.com/1200x/30/61/78/3061785066c7fceb6aea9a52751cac4e.jpg" alt="image">
            <div class="fade-overlay"></div>
        </div>
        <div class="containers">
            <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                <div class="product-card">
                    <img src="<?php echo $row['image']; ?>" alt="<?php echo $row['name']; ?>">
                    <h3>
                        <?php echo $row['name']; ?>
                    </h3>
                    <p>₹
                        <?php echo $row['price']; ?>
                    </p>
                    <a href="landing.php?add=<?php echo $row['id']; ?>">
                        <button>Add to Cart</button>
                    </a>
                </div>
            <?php } ?>
        </div>
    </div>

</body>

</html>