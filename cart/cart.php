<?php
session_start();
include('includes/db_connect.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Your Cart</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>Your Cart</h1>
    <a href="catalog.php">← Back to Catalog</a>

    <?php
    if(isset($_SESSION['cart']) && count($_SESSION['cart']) > 0) {
        echo "<ul>";
        $total = 0;
        foreach($_SESSION['cart'] as $id => $qty) {
            $result = $conn->query("SELECT * FROM products WHERE product_id=$id");
            $row = $result->fetch_assoc();
            $subtotal = $row['price'] * $qty;
            $total += $subtotal;
            echo "<li>{$row['name']} - Quantity: $qty - $".$subtotal."</li>";
        }
        echo "</ul>";
        echo "<p>Total: $" . $total . "</p>";
        echo "<a href='checkout.php'>Checkout</a>";
    } else {
        echo "<p>Your cart is empty.</p>";
    }
    ?>
</body>
</html>
