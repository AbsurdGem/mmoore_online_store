<?php 
require_once __DIR__ . '/../includes/db_connect.php'; 
class ProductModel { public function getAllProducts() { global $conn; $sql = "SELECT * FROM products"; $result = $conn-; return $result; } } 
