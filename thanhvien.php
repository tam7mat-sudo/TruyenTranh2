<?php
include 'inc/database.php';
_header('Hồ Sơ Thành Viên - Hikaru Shop');
navbar();
?>

<section class="container my-5">
    <?php if(isset($_SESSION['user'])): ?>
        <div class="row g-4">
            <!-- Cột trái: Thẻ thành viên VIP & Thông tin cá nhân -->
            <div class="col-lg-4">
                <div class="card manga-card border-secondary p-4 bg-dark text-white shadow-lg rounded-4 text-center">
                    <!-- Avatar & Hạng thành viên -->
                    <div class="position-relative d-inline-block mx-auto mb-3">
                        <div class="bg-danger text-white rounded-circle d-flex align-items-center justify-content-center mx-auto shadow" style="width: 90px; height: 90px; font-size: 36px; font-weight: bold;">
                            <?php echo strtoupper(mb_substr($_SESSION['user']['name'], 0, 1)); ?>
                        </div>
                        <span class="position-absolute bottom-0 end-0 badge rounded-pill bg-warning text-dark border border-dark fw-bold">
                            <i class="fa-solid fa-crown me-1"></i>VIP Silver
                        </span>
                    </div>

                    <h4 class="fw-bold text-white mb-1"><?php echo htmlspecialchars($_SESSION['user']['name']); ?></h4>
                    <p class="text-secondary small mb-3">Thành viên thân thiết của Hikaru Shop</p>

                    <div class="bg-black p-3 rounded-3 border border-secondary text-start mb-3">
                        <p class="mb-2 small text-secondary"><i class="fa-solid fa-phone text-danger me-2"></i><strong>Số điện thoại:</strong> <span class="text-white"><?php echo htmlspecialchars($_SESSION['user']['phone']); ?></span></p>
                        <p class="mb-0 small text-secondary"><i class="fa-solid fa-envelope text-danger me-2"></i><strong>Email:</strong> <span class="text-white"><?php echo htmlspecialchars($_SESSION['user']['email']); ?></span></p>
                    </div>

                    <a href="logout.php" class="btn btn-outline-danger w-100 rounded-pill fw-bold text-uppercase py-2 shadow-sm">
                        <i class="fa-solid fa-right-from-bracket me-2"></i>Đăng Xuất
                    </a>
                </div>
            </div>

            <!-- Cột phải: Thống kê & Ưu đãi thành viên -->
            <div class="col-lg-8">
                <!-- Thống kê nhanh -->
                <div class="row g-3 mb-4">
                    <div class="col-md-4">
                        <div class="card bg-dark border-secondary p-3 text-center text-white rounded-4 shadow-sm">
                            <div class="text-danger fs-3 mb-1"><i class="fa-solid fa-bag-shopping"></i></div>
                            <h5 class="fw-bold mb-0">3</h5>
                            <span class="text-secondary small">Đơn Hàng Đã Đặt</span>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card bg-dark border-secondary p-3 text-center text-white rounded-4 shadow-sm">
                            <div class="text-warning fs-3 mb-1"><i class="fa-solid fa-coins"></i></div>
                            <h5 class="fw-bold mb-0">350 Điểm</h5>
                            <span class="text-secondary small">Điểm Tích Luỹ VIP</span>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card bg-dark border-secondary p-3 text-center text-white rounded-4 shadow-sm">
                            <div class="text-success fs-3 mb-1"><i class="fa-solid fa-ticket"></i></div>
                            <h5 class="fw-bold mb-0">2 Voucher</h5>
                            <span class="text-secondary small">Ưu Đãi Đang Có</span>
                        </div>
                    </div>
                </div>

                <!-- Ưu đãi dành riêng cho hạng thành viên -->
                <div class="card manga-card border-secondary p-4 bg-dark text-white shadow-lg rounded-4 mb-4">
                    <h5 class="fw-bold mb-3 text-white"><i class="fa-solid fa-gift text-danger me-2"></i>Đặc Quyền Hạng VIP Silver</h5>
                    <hr class="border-secondary">
                    <ul class="text-secondary small mb-0 ps-3">
                        <li class="mb-2 text-white">Giảm trực tiếp <strong class="text-danger">5%</strong> cho tất cả các đơn hàng Manga / Light Novel.</li>
                        <li class="mb-2 text-white">Miễn phí bọc sách bảo vệ cao cấp cho mọi đầu truyện đặt mua tại shop.</li>
                        <li class="text-white">Tặng mã giảm giá độc quyền vào dịp sinh nhật hàng năm.</li>
                    </ul>
                </div>

                <!-- Lịch sử hoạt động gần đây -->
                <div class="card manga-card border-secondary p-4 bg-dark text-white shadow-lg rounded-4">
                    <h5 class="fw-bold mb-3 text-white"><i class="fa-solid fa-clock-rotate-left text-danger me-2"></i>Lịch Sử Hoạt Động Gần Đây</h5>
                    <hr class="border-secondary">
                    <div class="table-responsive">
                        <table class="table table-dark table-hover align-middle small text-center mb-0">
                            <thead>
                                <tr class="text-secondary">
                                    <th>Mã Đơn</th>
                                    <th>Ngày Đặt</th>
                                    <th>Tổng Tiền</th>
                                    <th>Trạng Thái</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="fw-bold text-white">#HR-1092</td>
                                    <td class="text-secondary">10/10/2026</td>
                                    <td class="text-danger fw-bold">75,000 đ</td>
                                    <td><span class="badge bg-success bg-opacity-20 text-success border border-success">Hoàn thành</span></td>
                                </tr>
                                <tr>
                                    <td class="fw-bold text-white">#HR-1085</td>
                                    <td class="text-secondary">02/10/2026</td>
                                    <td class="text-danger fw-bold">120,000 đ</td>
                                    <td><span class="badge bg-success bg-opacity-20 text-success border border-success">Hoàn thành</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    <?php else: ?>
        <!-- Giao diện khi chưa đăng nhập -->
        <div class="row justify-content-center">
            <div class="col-md-6 text-center">
                <div class="card manga-card border-secondary p-5 bg-dark text-white shadow-lg rounded-4">
                    <div class="fs-1 text-danger mb-3"><i class="fa-solid fa-user-lock"></i></div>
                    <h3 class="fw-bold text-white mb-2">Chưa Đăng Nhập</h3>
                    <p class="text-secondary mb-4">Vui lòng đăng nhập tài khoản để xem thông tin thành viên, hạng thẻ và lịch sử đơn hàng của bạn.</p>
                    <a href="login.php" class="btn btn-manga py-3 fw-bold text-uppercase rounded-pill shadow">
                        <i class="fa-solid fa-right-to-bracket me-2"></i>Đăng Nhập Ngay
                    </a>
                </div>
            </div>
        </div>
    <?php endif; ?>
</section>

<?php
_footer();
?>