<?php
include 'inc/database.php';
_header('Về Hikaru Shop - Thế Giới Truyện Tranh');
navbar();
?>

<section class="container my-5">
    <div class="card manga-card border-secondary p-4 p-md-5 bg-dark text-white shadow-lg rounded-4">
        <div class="text-center mb-5">
            <h2 class="fw-bold text-white text-uppercase">
                <i class="fa-solid fa-store text-danger me-2"></i>Giới Thiệu Về Hikaru Shop
            </h2>
            <p class="text-secondary">Thế giới truyện tranh & Anime chính hãng dành cho độc giả Việt Nam</p>
            <hr class="border-danger w-25 mx-auto opacity-100 mt-3">
        </div>

        <div class="mb-5">
            <p class="fs-5 leading-relaxed text-light">
                Chào mừng bạn đến với <strong class="text-danger">Hikaru Shop</strong> – điểm đến lý tưởng và uy tín hàng đầu dành cho những tâm hồn đam mê Manga, Light Novel và văn hóa Anime/Comic tại Việt Nam!
            </p>
        </div>

        <div class="row g-4 mb-5">
            <div class="col-md-6">
                <div class="p-4 rounded-4 bg-black bg-opacity-50 border border-secondary h-100">
                    <h4 class="fw-bold text-danger mb-3">
                        <i class="fa-solid fa-book-open me-2"></i>Về Chúng Tôi
                    </h4>
                    <p class="text-secondary mb-0">
                        <strong>Hikaru Shop</strong> tự hào là <strong>đại lý phân phối và cung cấp chính hãng</strong> các ấn phẩm từ các Nhà xuất bản danh tiếng trên toàn quốc (như NXB Kim Đồng, NXB Trẻ, IPM, Amak, Wings Books,...). Từ những ngày đầu thành lập, chúng tôi hoạt động với sứ mệnh cốt lõi: <em>Đưa những trang sách chất lượng nhất, trọn vẹn nhất tới tay người đọc.</em>
                    </p>
                </div>
            </div>

            <div class="col-md-6">
                <div class="p-4 rounded-4 bg-black bg-opacity-50 border border-secondary h-100">
                    <h4 class="fw-bold text-danger mb-3">
                        <i class="fa-solid fa-layer-group me-2"></i>Sản Phẩm Chủ Lực
                    </h4>
                    <ul class="text-secondary mb-0 ps-3">
                        <li class="mb-2"><strong class="text-white">Manga & Light Novel:</strong> Cập nhật liên tục các tập mới, phiên bản đặc biệt (Limited Edition), Boxset sưu tầm.</li>
                        <li class="mb-2"><strong class="text-white">Sách & Tạp Chí:</strong> Sách thiếu nhi, tạp chí tuổi học trò, truyện phát triển tư duy.</li>
                        <li><strong class="text-white">Vật Phẩm & Quà Tặng (Merchandise):</strong> Poster, Bookmark, Standee, Figure và phụ kiện Anime/Manga độc quyền.</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="p-4 p-md-5 rounded-4 border border-secondary bg-black bg-opacity-25 mb-5">
            <h4 class="fw-bold text-center text-white mb-4">
                <i class="fa-solid fa-shield-halved text-danger me-2"></i>Cam Kết Chất Lượng & Dịch Vụ
            </h4>
            <div class="row g-4">
                <div class="col-md-3 text-center">
                    <div class="fs-1 text-danger mb-2"><i class="fa-solid fa-certificate"></i></div>
                    <h6 class="fw-bold text-white">100% Chính Hãng</h6>
                    <p class="text-secondary small mb-0">Nguồn gốc minh bạch, bản quyền rõ ràng theo pháp luật Việt Nam.</p>
                </div>
                <div class="col-md-3 text-center">
                    <div class="fs-1 text-danger mb-2"><i class="fa-solid fa-box-archive"></i></div>
                    <h6 class="fw-bold text-white">Đóng Gói Cẩn Thận</h6>
                    <p class="text-secondary small mb-0">Bọc chống xóc kỹ càng, giữ sách nguyên vẹn phẳng đẹp khi tới tay.</p>
                </div>
                <div class="col-md-3 text-center">
                    <div class="fs-1 text-danger mb-2"><i class="fa-solid fa-truck-fast"></i></div>
                    <h6 class="fw-bold text-white">Giao Hàng Tận Nơi</h6>
                    <p class="text-secondary small mb-0">Hỗ trợ vận chuyển nhanh chóng toàn quốc với chi phí tối ưu.</p>
                </div>
                <div class="col-md-3 text-center">
                    <div class="fs-1 text-danger mb-2"><i class="fa-solid fa-headset"></i></div>
                    <h6 class="fw-bold text-white">Hỗ Trợ Tận Tâm</h6>
                    <p class="text-secondary small mb-0">Đổi trả 1-1 nhanh chóng nếu phát sinh lỗi từ nhà sản xuất.</p>
                </div>
            </div>
        </div>

        <div class="text-center pt-2">
            <p class="text-secondary fs-6 mb-4">
                <strong>Hikaru Shop</strong> không chỉ là một cửa hàng bán sách, mà còn là nơi kết nối cộng đồng những người yêu thích truyện tranh. Cảm ơn bạn đã đồng hành và lựa chọn Hikaru Shop trên hành trình khám phá những thế giới kỳ diệu qua từng trang sách!
            </p>
            <a href="index.php" class="btn btn-manga px-4 py-2 rounded-pill fw-bold text-uppercase shadow">
                <i class="fa-solid fa-cart-shopping me-2"></i>Khám Phá Truyện Ngay
            </a>
        </div>
    </div>
</section>

<?php
_footer();
?>