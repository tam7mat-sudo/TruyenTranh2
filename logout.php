<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

unset($_SESSION['user']);
unset($_SESSION['cart']); 


header('location: index.php');
exit();
?>