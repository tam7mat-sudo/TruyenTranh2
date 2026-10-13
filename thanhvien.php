<?php
include 'inc/database.php';



_header('Hồ Sơ Thành Viên - Otaku Realm');
navbar();
?>

<section class="container my-5">
    <div class="card manga-card border-secondary p-4 bg-dark text-white shadow-lg rounded-4">
        <h3 class="fw-bold mb-4 text-white"><i class="fa-solid fa-user text-danger me-2"></i>THÔNG TIN THÀNH VIÊN</h3>
        <hr class="border-secondary">
        
        <?php if(isset($_SESSION['user'])): ?>
            <p><strong>Họ và tên:</strong> <?php echo htmlspecialchars($_SESSION['user']['name']); ?></p>
            <p><strong>Số điện thoại:</strong> <?php echo htmlspecialchars($_SESSION['user']['phone']); ?></p>
            <p><strong>Email:</strong> <?php echo htmlspecialchars($_SESSION['user']['email']); ?></p>
        <?php else: ?>
            <p class="text-secondary">Bạn chưa đăng nhập. Vui lòng <a href="login.php" class="text-danger">đăng nhập</a> để xem thông tin thành viên.</p>
        <?php endif; ?>
    </div>
</section>

<?php
_footer();
?>