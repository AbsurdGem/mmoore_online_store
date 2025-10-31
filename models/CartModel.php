<?php 
class CartModel { public function getCartItems() { return $_SESSION['cart'] ?? []; } public function addItem($productId) { if (!isset($_SESSION['cart'][$productId])) { $_SESSION['cart'][$productId] = 1; } else { $_SESSION['cart'][$productId]++; } } public function clear() { unset($_SESSION['cart']); } } 
