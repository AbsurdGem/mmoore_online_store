<h1>Product Catalog</h1> 
<?php while ($row = $products- ?> 
<div><h3><?= $row['product_name'] ?></h3><p><?= $row['description'] ?></p><p>Price: $<?= $row['price'] ?></p><a href="controllers/CartController.php?action=add&product=^<?= $row['product_id'] ?^>">Add to Cart</a></div><?php endwhile; ?> 
