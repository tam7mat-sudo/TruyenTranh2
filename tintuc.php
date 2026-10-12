<?php
include 'inc/database.php';
_header('Tin Tức - Hikaru Shop');
navbar();
?>
<section class="container my-5">
    <div class="row">
        <div class="col-lg-8">
            <div class="card border-0 shadow-sm p-4 bg-white rounded-3 mb-4">
                <h3 class="fw-bold text-dark mb-3">Thông báo lịch nghỉ Lễ và cập nhật Manga mới</h3>
                <p class="text-muted small"><i class="fa-solid fa-calendar me-1"></i> 12/10/2026 | Đăng bởi: Admin</p>
                <hr>
                <p>Chào các độc giả thân thiết của Hikaru Shop, hệ thống xin gửi tới thông báo lịch phát hành tuần tới cũng như các tựa truyện độc quyền sắp ra mắt...</p>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card border-0 shadow-sm p-3 bg-white rounded-3">
                <h5 class="fw-bold text-dark mb-3">Bài Viết Mới</h5>
                <ul class="list-unstyled">
                    <li class="mb-2"><a href="#" class="text-success text-decoration-none">Review bộ Manga Beastars cực hot</a></li>
                    <li class="mb-2"><a href="#" class="text-success text-decoration-none">Top 5 tựa sách bán chạy nhất tháng</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<?php
_footer();
?>