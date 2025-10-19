<?php
session_start();
include('../includes/db_connect.php');

if(isset($_GET['action']) && $_GET['action'] == 'add') {
    $id = intval($_GET['id']);
    if(!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = array();
    }
    if(isset($_SESSION['cart'][$id])) {
        $_SESSION['cart'][$id]++;
    } else {
        $_SESSION['cart'][$id] = 1;
    }
}
header("Location: ../catalog.php");
exit;
?>
