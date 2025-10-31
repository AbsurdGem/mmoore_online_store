<?php 
require_once __DIR__ . '/../models/CartModel.php'; 
class CheckoutController { public function checkout() { $cartModel = new CartModel(); $cartItems = $cartModel-; include __DIR__ . '/../views/checkout_view.php'; } } 
