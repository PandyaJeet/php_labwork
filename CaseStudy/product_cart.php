<?php
session_start();
require_once 'db/db.php';

if (!isset($_SESSION['username'])) {
    echo "<script>alert('Please login first!'); window.location.href='login.php';</script>";
    exit;
}

// remove item from cart
if (isset($_GET['remove'])) {
    $remove_id = $_GET['remove'];
    $key = array_search($remove_id, $_SESSION['cart']);
    if ($key !== false) {
        unset($_SESSION['cart'][$key]);
        $_SESSION['cart'] = array_values($_SESSION['cart']);
    }
    echo "<script>window.location.href='product_cart.php';</script>";
    exit;
}

$db = new Database();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Cart</title>
    <link rel="stylesheet" href="./styles/landing.css">
</head>

<body>
    <div align="center" class="nav">
        <div class="hello">
            <h1>My Cart</h1>
            <a href="landing.php" class="logoutbtn" style="text-decoration:none; padding:8px 15px;">Back to Shop</a>
        </div>
    </div>

    <div class="containers" style="margin-top: 20px;">
        <?php
        if (!empty($_SESSION['cart'])) {
            $total = 0;
            foreach ($_SESSION['cart'] as $product_id) {
                $sql = "SELECT * FROM products WHERE id = '$product_id'";
                $result = mysqli_query($db->conn, $sql);
                $row = mysqli_fetch_assoc($result);

                if ($row) {
                    $total = $total + $row['price'];
                    ?>
                    <div class="product-card">
                        <img src="<?php echo $row['image']; ?>" alt="<?php echo $row['name']; ?>">
                        <h3>
                            <?php echo $row['name']; ?>
                        </h3>
                        <p>₹
                            <?php echo $row['price']; ?>
                        </p>
                        <a href="product_cart.php?remove=<?php echo $row['id']; ?>">
                            <button style="background:red;">Remove</button>
                        </a>
                    </div>
                    <?php
                }
            }
            ?>
            <div style="width:100%; text-align:center; padding:20px;">
                <h2 style="color:white;">Total: ₹
                    <?php echo $total; ?>
                </h2>
                <a href="payment.php">
                    <button
                        style="margin-top:10px; padding:10px 30px; background:green; color:white; border:none; border-radius:5px; font-size:18px; cursor:pointer;">
                        Proceed to Payment
                    </button>
                </a>
            </div>
        <?php } else { ?>
            <div style="text-align:center; padding:50px;">
                <h2 style="color:white;">Your cart is empty!</h2>
                <a href="landing.php" style="color:lightblue;">Go shopping</a>
            </div>
        <?php } ?>
    </div>

</body>

</html>