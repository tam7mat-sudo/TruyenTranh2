<?php
include 'inc/database.php';
_header('Tin Tức - Otaku Realm');
navbar();

$limit = 5;
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$start = ($page - 1) * $limit;

<<<<<<< HEAD
=======
// Lấy tổng số bài viết
>>>>>>> a67c651da682f9124b7f7c444f7fecbe8c6caf89
$totalResult = Database::query("SELECT COUNT(*) as total FROM news");
$totalRow = $totalResult->fetch_assoc();
$totalNews = $totalRow['total'];
$totalPages = ceil($totalNews / $limit);

<<<<<<< HEAD
=======
// Lấy danh sách bài viết theo trang
>>>>>>> a67c651da682f9124b7f7c444f7fecbe8c6caf89
$result = Database::query("SELECT * FROM news ORDER BY id DESC LIMIT $start, $limit");
?>

<section class="container my-5">
    <div class="row g-4">
<<<<<<< HEAD
        <div class="col-lg-8">
            <h2 class="fw-bold mb-4" style="color: #4a7c59;">
    <i class="fa-solid fa-newspaper text-danger me-2"></i>TIN TỨC & SỰ KIỆN</h2>
=======
        <!-- Cột trái: Danh sách tin tức -->
        <div class="col-lg-8">
            <h3 class="fw-bold mb-4 text-white"><i class="fa-solid fa-newspaper text-danger me-2"></i>TIN TỨC & SỰ KIỆN</h3>
>>>>>>> a67c651da682f9124b7f7c444f7fecbe8c6caf89
            
            <?php if ($result && $result->num_rows > 0): ?>
                <?php while ($row = $result->fetch_assoc()): ?>
                    <div class="card manga-card border-secondary p-4 bg-dark text-white shadow-sm rounded-4 mb-4">
                        <h4 class="fw-bold text-white mb-2"><?php echo htmlspecialchars($row['title']); ?></h4>
                        <p class="text-secondary small mb-3">
                            <i class="fa-regular fa-calendar-days me-1"></i> <?php echo date('d/m/Y', strtotime($row['created_at'])); ?> 
                            | Đăng bởi: <span class="text-white">Admin</span>
                        </p>
                        <p class="text-secondary mb-3"><?php echo mb_substr(htmlspecialchars($row['content']), 0, 150); ?>...</p>
                        <a href="#" class="text-danger text-decoration-none fw-semibold small">Xem chi tiết <i class="fa-solid fa-arrow-right ms-1"></i></a>
                    </div>
                <?php endwhile; ?>

<<<<<<< HEAD
=======
                <!-- Phân trang -->
>>>>>>> a67c651da682f9124b7f7c444f7fecbe8c6caf89
                <?php if ($totalPages > 1): ?>
                    <nav aria-label="Page navigation">
                        <ul class="pagination justify-content-center">
                            <?php for ($i = 1; $i <= $totalPages; $i++): ?>
                                <li class="page-item <?php echo ($page == $i) ? 'active' : ''; ?>">
                                    <a class="page-link bg-dark text-white border-secondary" href="tintuc.php?page=<?php echo $i; ?>"><?php echo $i; ?></a>
                                </li>
                            <?php endfor; ?>
                        </ul>
                    </nav>
                <?php endif; ?>

            <?php else: ?>
                <p class="text-secondary">Chưa có bài viết tin tức nào.</p>
            <?php endif; ?>
        </div>

<<<<<<< HEAD
=======
        <!-- Cột phải: Bài viết mới -->
>>>>>>> a67c651da682f9124b7f7c444f7fecbe8c6caf89
        <div class="col-lg-4">
            <div class="card manga-card p-4 bg-dark border-secondary">
                <h5 class="fw-bold text-white mb-3">Bài Viết Mới</h5>
                <hr class="border-secondary">
                <ul class="list-unstyled mb-0">
                    <?php 
                    $sidebarResult = Database::query("SELECT id, title FROM news ORDER BY id DESC LIMIT 5");
                    while ($sRow = $sidebarResult->fetch_assoc()):
                    ?>
                        <li class="mb-3">
                            <a href="#" class="text-decoration-none text-danger small fw-semibold d-block">
                                <i class="fa-solid fa-angle-right me-1"></i> <?php echo htmlspecialchars($sRow['title']); ?>
                            </a>
                        </li>
                    <?php endwhile; ?>
                </ul>
            </div>
        </div>
    </div>
</section>

<?php
_footer();
?>