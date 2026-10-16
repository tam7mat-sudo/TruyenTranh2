<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
<<<<<<< HEAD

unset($_SESSION['user']);
unset($_SESSION['cart']); 


=======
unset($_SESSION['user']);
>>>>>>> a67c651da682f9124b7f7c444f7fecbe8c6caf89
header('location: index.php');
exit();
?>