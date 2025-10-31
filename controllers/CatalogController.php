<?php 
require_once __DIR__ . '/../models/ProductModel.php'; 
class CatalogController { public function showCatalog() { $productModel = new ProductModel(); $products = $productModel-; include __DIR__ . '/../views/catalog_view.php'; } } 
