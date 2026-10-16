<?php
include_once 'inc/database.php';

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
header('Content-Type: application/json');

if (!isset($_SESSION['user'])) {
    echo json_encode([
        'status' => 'error',
        'message' => 'Bạn cần đăng nhập tài khoản để thêm sản phẩm vào giỏ hàng!',
        'redirect' => 'login.php'
    ]);
    exit();
}

$id_product = isset($_GET['id']) ? intval($_GET['id']) : 0;

if ($id_product > 0) {
    $q = Database::query("SELECT * FROM products WHERE id = " . $id_product);
    if($q && $r = $q->fetch_array()){
        if(!isset($_SESSION['cart']) || !is_array($_SESSION['cart'])) {
            $_SESSION['cart'] = array();
        }

        if(isset($_SESSION['cart'][$id_product])) {
            $_SESSION['cart'][$id_product]['quantity'] += 1;
        } else {
            $_SESSION['cart'][$id_product] = array(
                'id'       => $r['id'],
                'name'     => $r['name'],
                'image'    => $r['image'],
                'price'    => $r['price'],
                'quantity' => 1
            );
        }
    }
}

$totalQuantity = 0;
if (isset($_SESSION['cart']) && is_array($_SESSION['cart'])) {
    foreach ($_SESSION['cart'] as $item) {
        $totalQuantity += intval($item['quantity']);
    }
}

echo json_encode([
    'status' => 'success',
    'totalQuantity' => $totalQuantity
]);
exit();
?>