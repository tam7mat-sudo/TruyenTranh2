<?php
include 'inc/database.php';
_header('Lịch Phát Hành - Otaku Realm');
navbar();
?>
<section class="container my-5">
    <div class="card manga-card border-secondary p-4 bg-dark text-white shadow-lg rounded-4">
        <h3 class="fw-bold mb-4 text-white"><i class="fa-solid fa-calendar-days text-danger me-2"></i>LỊCH PHÁT HÀNH TRUYỆN TRANH</h3>
        <div class="table-responsive">
            <table class="table table-dark table-hover align-middle text-center border-secondary">
                <thead class="table-secondary text-dark">
                    <tr>
                        <th>NGÀY PHÁT HÀNH</th>
                        <th class="text-start">TÊN SẢN PHẨM</th>
                        <th>TẬP</th>
                        <th>GIÁ (VNĐ)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-secondary">10/10/2026</td>
                        <td class="text-start fw-semibold text-white">Thám Lừng Conan</td>
                        <td><span class="badge bg-danger">105</span></td>
                        <td class="text-danger fw-bold">25,000 đ</td>
                    </tr>
                    <tr>
                        <td class="text-secondary">15/10/2026</td>
                        <td class="text-start fw-semibold text-white">Doraemon - Phiên bản đặc biệt</td>
                        <td><span class="badge bg-danger">01</span></td>
                        <td class="text-danger fw-bold">45,000 đ</td>
                    </tr>
                    <tr>
                        <td class="text-secondary">20/10/2026</td>
                        <td class="text-start fw-semibold text-white">Dragon Ball - Tập mới</td>
                        <td><span class="badge bg-danger">25</span></td>
                        <td class="text-danger fw-bold">25,000 đ</td>
                    </tr>
                    <tr>
                        <td class="text-secondary">25/10/2026</td>
                        <td class="text-start fw-semibold text-white">Naruto - Cửu Vĩ Hồ Ly</td>
                        <td><span class="badge bg-danger">25</span></td>
                        <td class="text-danger fw-bold">25,000 đ</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>
<?php
_footer();
?>