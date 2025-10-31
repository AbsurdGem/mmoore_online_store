<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Checkout</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>Checkout</h1>
    <a href="cart.php">← Back to Cart</a>

    <form method="post" action="php/checkout_process.php">
        <label>Name:</label><br>
        <input type="text" name="name" required><br><br>
        <label>Email:</label><br>
        <input type="email" name="email" required><br><br>
        <label>Address:</label><br>
        <textarea name="address" required></textarea><br><br>
        <button type="submit">Place Order</button>
    </form>
</body>
</html>
