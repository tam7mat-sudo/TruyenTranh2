<?php
include 'inc/database.php';
_header('Lịch Phát Hành - Hikaru Shop');
navbar();
?>

<section class="container my-5">
    <div class="card manga-card border-secondary p-4 p-md-5 bg-dark text-white shadow-lg rounded-4">
        
        <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center mb-4 pb-3 border-bottom border-secondary gap-3">
            <div>
                <h3 class="fw-bold mb-1 text-white">
                    <i class="fa-solid fa-calendar-days text-danger me-2"></i>LỊCH PHÁT HÀNH TRUYỆN TRANH
                </h3>
                <p class="text-secondary small mb-0">Cập nhật lịch ra mắt các tập truyện mới nhất tháng 10/2026</p>
            </div>
            
            <div class="style-search" style="max-width: 300px;">
                <div class="input-group">
                    <span class="input-group-text bg-black text-secondary border-secondary"><i class="fa-solid fa-magnifying-glass"></i></span>
                    <input type="text" id="searchSchedule" class="form-control bg-black text-white border-secondary" placeholder="Lọc tên truyện...">
                </div>
            </div>
        </div>

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
                    <tr>
                        <td class="text-secondary fw-semibold">
                            <span class="d-block text-white">05/10/2026</span>
                            <small class="text-info">Thứ Hai</small>
                        </td>
                        <td>
                            <img src="accets/images/t1.jpg" class="rounded shadow-sm" style="width: 45px; height: 60px; object-fit: cover;" alt="Ngôn Tình 1">
                        </td>
                        <td class="text-start">
                            <h6 class="mb-1 text-white fw-bold">Nơi Nào Nắng Ấm - Ngôn Tình Hot</h6>
                            <span class="badge bg-danger bg-opacity-20 text-danger border border-danger fw-normal">Sách Ngôn Tình</span>
                        </td>
                        <td><span class="badge bg-danger px-3 py-2 fs-6">01</span></td>
                        <td class="text-danger fw-bold fs-6">35,000 đ</td>
                        <td><span class="badge bg-success bg-opacity-20 text-success border border-success px-2 py-1">Đã Phát Hành</span></td>
                        <td>
                            <!-- Đã gắn data-id tương ứng trong CSDL và class ajax-add-cart để nút hoạt động -->
                            <button class="btn btn-sm btn-outline-danger rounded-pill px-3 ajax-add-cart" data-id="1"><i class="fa-solid fa-cart-shopping me-1"></i>Mua ngay</button>
                        </td>
                    </tr>

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
                            <button class="btn btn-sm btn-outline-danger rounded-pill px-3 ajax-add-cart" data-id="2"><i class="fa-solid fa-cart-shopping me-1"></i>Mua ngay</button>
                        </td>
                    </tr>

                    <tr>
                        <td class="text-secondary fw-semibold">
                            <span class="d-block text-white">12/10/2026</span>
                            <small class="text-info">Thứ Hai</small>
                        </td>
                        <td>
                            <img src="accets/images/t2.jpg" class="rounded shadow-sm" style="width: 45px; height: 60px; object-fit: cover;" alt="Ngôn Tình 2">
                        </td>
                        <td class="text-start">
                            <h6 class="mb-1 text-white fw-bold">Gió Bắc Đã Về - Ngôn Tình Lãng Mạn</h6>
                            <span class="badge bg-warning text-dark fw-bold">Bản Giới Hạn</span>
                        </td>
                        <td><span class="badge bg-danger px-3 py-2 fs-6">02</span></td>
                        <td class="text-danger fw-bold fs-6">35,000 đ</td>
                        <td><span class="badge bg-success bg-opacity-20 text-success border border-success px-2 py-1">Đã Phát Hành</span></td>
                        <td>
                            <button class="btn btn-sm btn-outline-danger rounded-pill px-3 ajax-add-cart" data-id="3"><i class="fa-solid fa-cart-shopping me-1"></i>Mua ngay</button>
                        </td>
                    </tr>

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
                            <button class="btn btn-sm btn-danger rounded-pill px-3 ajax-add-cart" data-id="4"><i class="fa-solid fa-bell me-1"></i>Đặt trước</button>
                        </td>
                    </tr>

                    <tr>
                        <td class="text-secondary fw-semibold">
                            <span class="d-block text-white">18/10/2026</span>
                            <small class="text-warning">Chủ Nhật</small>
                        </td>
                        <td>
                            <img src="accets/images/t3.jpg" class="rounded shadow-sm" style="width: 45px; height: 60px; object-fit: cover;" alt="Ngôn Tình 3">
                        </td>
                        <td class="text-start">
                            <h6 class="mb-1 text-white fw-bold">Thành Quách Xiêu Vẹo - Ngôn Tình Cổ Trang</h6>
                            <span class="badge bg-danger bg-opacity-20 text-danger border border-danger fw-normal">Trọn Bộ Boxset</span>
                        </td>
                        <td><span class="badge bg-danger px-3 py-2 fs-6">03</span></td>
                        <td class="text-danger fw-bold fs-6">40,000 đ</td>
                        <td><span class="badge bg-info bg-opacity-20 text-info border border-info px-2 py-1">Nhận Pre-order</span></td>
                        <td>
                            <button class="btn btn-sm btn-danger rounded-pill px-3 ajax-add-cart" data-id="5"><i class="fa-solid fa-fire me-1"></i>Pre-order</button>
                        </td>
                    </tr>

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
                            <button class="btn btn-sm btn-danger rounded-pill px-3 ajax-add-cart" data-id="6"><i class="fa-solid fa-bell me-1"></i>Đặt trước</button>
                        </td>
                    </tr>

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
                            <button class="btn btn-sm btn-danger rounded-pill px-3 ajax-add-cart" data-id="7"><i class="fa-solid fa-fire me-1"></i>Pre-order</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>

<!-- SCRIPT TÌM KIẾM VÀ AJAX ĐẶT HÀNG / MUA NGAY GIỮ NGUYÊN GIAO DIỆN -->
<script>
// Chức năng lọc tìm kiếm lịch phát hành
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

// Chức năng click mua ngay / đặt trước tự động thêm vào giỏ hàng
document.addEventListener("click", function(e) {
    const targetButton = e.target.closest(".ajax-add-cart");
    if (targetButton) {
        e.preventDefault();
        const productId = targetButton.getAttribute("data-id");

        fetch("add_cart_ajax.php?id=" + productId)
            .then(response => response.json())
            .then(data => {
                if (data.status === "error" && data.redirect) {
                    alert(data.message);
                    window.location.href = data.redirect;
                    return;
                }

                // Cập nhật số lượng giỏ hàng trên Header ngay lập tức
                const badge = document.getElementById("cart-badge");
                if (badge) {
                    badge.textContent = data.totalQuantity;
                }

                // Hiệu ứng đổi màu nút thành "Đã thêm!" tạm thời
                const originalText = targetButton.innerHTML;
                targetButton.innerHTML = '<i class="fa-solid fa-check me-1"></i> Đã thêm!';
                targetButton.classList.remove("btn-outline-danger", "btn-danger");
                targetButton.classList.add("btn-success");

                setTimeout(() => {
                    targetButton.innerHTML = originalText;
                    targetButton.classList.remove("btn-success");
                    // Khôi phục đúng style nút ban đầu
                    if(targetButton.classList.contains("rounded-pill")) {
                        targetButton.classList.add(originalText.includes("Mua ngay") ? "btn-outline-danger" : "btn-danger");
                    }
                }, 1200);
            })
            .catch(error => console.error("Lỗi AJAX:", error));
    }
});
</script>

<?php
_footer();
?>