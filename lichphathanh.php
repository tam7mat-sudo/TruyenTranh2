<?php
include 'inc/database.php';
_header('Lịch Phát Hành - Hikaru Shop');
navbar();
?>

<section class="container my-5">
    <div class="card manga-card border-secondary p-4 p-md-5 bg-dark text-white shadow-lg rounded-4">
        
        <!-- Header Lịch phát hành -->
        <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center mb-4 pb-3 border-bottom border-secondary gap-3">
            <div>
                <h3 class="fw-bold mb-1 text-white">
                    <i class="fa-solid fa-calendar-days text-danger me-2"></i>LỊCH PHÁT HÀNH TRUYỆN TRANH
                </h3>
                <p class="text-secondary small mb-0">Cập nhật lịch ra mắt các tập truyện mới nhất tháng 10/2026</p>
            </div>
            
            <!-- Tìm kiếm nhanh trên lịch -->
            <div class="style-search" style="max-width: 300px;">
                <div class="input-group">
                    <span class="input-group-text bg-black text-secondary border-secondary"><i class="fa-solid fa-magnifying-glass"></i></span>
                    <input type="text" id="searchSchedule" class="form-control bg-black text-white border-secondary" placeholder="Lọc tên truyện...">
                </div>
            </div>
        </div>

        <!-- Bảng danh sách lịch phát hành -->
        <div class="table-responsive">
            <table class="table table-dark table-hover align-middle text-center border-secondary mb-0" id="scheduleTable">
                <thead class="table-secondary text-dark text-uppercase fs-7">
                    <tr>
                        <th style="width: 130px;">Ngày PH</th>
                        <th style="width: 80px;">Bìa</th>
                        <th class="text-start">Tên Sản Phẩm</th>
                        <th style="width: 90px;">Tập</th>
                        <th style="width: 120px;">Giá Bìa</th>
                        <th style="width: 130px;">Trạng Thái</th>
                        <th style="width: 120px;">Hành Động</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Item 1 -->
                    <tr>
                        <td class="text-secondary fw-semibold">
                            <span class="d-block text-white">10/10/2026</span>
                            <small class="text-danger">Thứ Bảy</small>
                        </td>
                        <td>
                            <img src="accets/images/conan1.jpg" class="rounded shadow-sm" style="width: 45px; height: 60px; object-fit: cover;" alt="Conan">
                        </td>
                        <td class="text-start">
                            <h6 class="mb-1 text-white fw-bold">Thám Tử Lừng Danh Conan</h6>
                            <span class="badge bg-secondary text-light fw-normal">NXB Kim Đồng</span>
                        </td>
                        <td><span class="badge bg-danger px-3 py-2 fs-6">105</span></td>
                        <td class="text-danger fw-bold fs-6">25,000 đ</td>
                        <td><span class="badge bg-success bg-opacity-20 text-success border border-success px-2 py-1">Đã Phát Hành</span></td>
                        <td>
                            <a href="index.php" class="btn btn-sm btn-outline-danger rounded-pill px-3"><i class="fa-solid fa-cart-shopping me-1"></i>Mua ngay</a>
                        </td>
                    </tr>

                    <!-- Item 2 -->
                    <tr>
                        <td class="text-secondary fw-semibold">
                            <span class="d-block text-white">15/10/2026</span>
                            <small class="text-warning">Thứ Năm</small>
                        </td>
                        <td>
                            <img src="accets/images/doremon1.jpg" class="rounded shadow-sm" style="width: 45px; height: 60px; object-fit: cover;" alt="Doraemon">
                        </td>
                        <td class="text-start">
                            <h6 class="mb-1 text-white fw-bold">Doraemon - Phiên bản đặc biệt</h6>
                            <span class="badge bg-warning text-dark fw-bold">Bản Bìa Cứng</span>
                        </td>
                        <td><span class="badge bg-danger px-3 py-2 fs-6">01</span></td>
                        <td class="text-danger fw-bold fs-6">45,000 đ</td>
                        <td><span class="badge bg-warning bg-opacity-20 text-warning border border-warning px-2 py-1">Sắp Ra Mắt</span></td>
                        <td>
                            <button class="btn btn-sm btn-danger rounded-pill px-3"><i class="fa-solid fa-bell me-1"></i>Đặt trước</button>
                        </td>
                    </tr>

                    <!-- Item 3 -->
                    <tr>
                        <td class="text-secondary fw-semibold">
                            <span class="d-block text-white">20/10/2026</span>
                            <small class="text-warning">Thứ Ba</small>
                        </td>
                        <td>
                            <img src="accets/images/ku1.jpg" class="rounded shadow-sm" style="width: 45px; height: 60px; object-fit: cover;" alt="Dragon Ball">
                        </td>
                        <td class="text-start">
                            <h6 class="mb-1 text-white fw-bold">Dragon Ball (Bảy Viên Ngọc Rồng)</h6>
                            <span class="badge bg-secondary text-light fw-normal">NXB Kim Đồng</span>
                        </td>
                        <td><span class="badge bg-danger px-3 py-2 fs-6">25</span></td>
                        <td class="text-danger fw-bold fs-6">25,000 đ</td>
                        <td><span class="badge bg-warning bg-opacity-20 text-warning border border-warning px-2 py-1">Sắp Ra Mắt</span></td>
                        <td>
                            <button class="btn btn-sm btn-danger rounded-pill px-3"><i class="fa-solid fa-bell me-1"></i>Đặt trước</button>
                        </td>
                    </tr>

                    <!-- Item 4 -->
                    <tr>
                        <td class="text-secondary fw-semibold">
                            <span class="d-block text-white">25/10/2026</span>
                            <small class="text-warning">Chủ Nhật</small>
                        </td>
                        <td>
                            <img src="accets/images/na1.jpg" class="rounded shadow-sm" style="width: 45px; height: 60px; object-fit: cover;" alt="Naruto">
                        </td>
                        <td class="text-start">
                            <h6 class="mb-1 text-white fw-bold">Naruto - Cửu Vĩ Hồ Ly</h6>
                            <span class="badge bg-danger bg-opacity-20 text-danger border border-danger fw-normal">Limited Edition</span>
                        </td>
                        <td><span class="badge bg-danger px-3 py-2 fs-6">25</span></td>
                        <td class="text-danger fw-bold fs-6">35,000 đ</td>
                        <td><span class="badge bg-info bg-opacity-20 text-info border border-info px-2 py-1">Nhận Pre-order</span></td>
                        <td>
                            <button class="btn btn-sm btn-danger rounded-pill px-3"><i class="fa-solid fa-fire me-1"></i>Pre-order</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>

<!-- Script lọc danh sách truyện nhanh -->
<script>
document.getElementById('searchSchedule').addEventListener('keyup', function() {
    let filter = this.value.toLowerCase();
    let rows = document.querySelectorAll('#scheduleTable tbody tr');
    
    rows.forEach(row => {
        let title = row.querySelector('td:nth-child(3)').textContent.toLowerCase();
        if(title.includes(filter)) {
            row.style.display = '';
        } else {
            row.style.display = 'none';
        }
    });
});
</script>

<?php
_footer();
?>