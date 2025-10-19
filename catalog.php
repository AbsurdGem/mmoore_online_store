<?php
include('includes/db_connect.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Product Catalog</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>Product Catalog</h1>
    <a href="index.php">← Back to Home</a>
    
    <?php
    $result = $conn->query("SELECT * FROM products");
    if ($result->num_rows > 0) {
        echo "<ul>";
        while ($row = $result->fetch_assoc()) {
            echo "<li>";
            echo "<strong>" . $row['name'] . "</strong> - $" . $row['price'];
           <a href="php/cart_functions.php?action=add&id=<?php echo $row['product_id']; ?>">Add to Cart</a>
            echo "</li>";
        }
        echo "</ul>";
    } else {
        echo "<p>No products found.</p>";
    }
    ?>
</body>
</html>
