<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
include 'inc/database.php';

if (isset($_GET['id'])) {
    addProductToCart($_GET['id']);
}

$totalQuantity = 0;
if (isset($_SESSION['cart']) && is_array($_SESSION['cart'])) {
    foreach ($_SESSION['cart'] as $item) {
        $totalQuantity += intval($item['quantity']);
    }
}

header('Content-Type: application/json; charset=utf-8');
echo json_encode(['totalQuantity' => $totalQuantity]);
exit();
?>