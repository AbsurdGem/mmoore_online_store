<?php 
require_once __DIR__ . '/../models/CartModel.php'; 
class CartController { public function showCart() { $cartModel = new CartModel(); $cartItems = $cartModel-; include __DIR__ . '/../views/cart_view.php'; } public function addToCart($productId) { $cartModel = new CartModel(); $cartModel-; header("Location: ../cart.php"); } public function clearCart() { $cartModel = new CartModel(); $cartModel-; header("Location: ../catalog.php"); } } 
