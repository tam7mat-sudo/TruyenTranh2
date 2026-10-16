<?php
include 'inc/database.php';
_header('Hướng Dẫn Cần Biết - Hikaru Shop');
navbar();
?>

<section class="container my-5">
    <div class="card manga-card border-secondary p-4 bg-dark text-white shadow-lg rounded-4">
        <h3 class="fw-bold mb-4 text-white">
            <i class="fa-solid fa-circle-question text-danger me-2"></i>HƯỚNG DẪN DÀNH CHO KHÁCH HÀNG
        </h3>
        <p class="text-secondary small mb-4">Tổng hợp các thắc mắc thường gặp và hướng dẫn mua sắm tại Hikaru Shop.</p>

        <div class="accordion accordion-flush" id="faqAccordion">

<<<<<<< HEAD
=======
            <!-- Câu 1 -->
>>>>>>> a67c651da682f9124b7f7c444f7fecbe8c6caf89
            <div class="accordion-item bg-dark text-white border-secondary">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button collapsed bg-dark text-white shadow-none fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne">
                        1. Làm sao để đặt mua truyện trên Hikaru Shop?
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                    <div class="accordion-body text-secondary">
                        Bạn chỉ cần tìm kiếm sản phẩm yêu thích, bấm nút <strong>"Thêm vào giỏ"</strong> hoặc <strong>"Đặt Mua"</strong>, sau đó truy cập vào Giỏ hàng, kiểm tra lại số lượng và tiến hành điền thông tin giao hàng là hoàn tất.
                    </div>
                </div>
            </div>

<<<<<<< HEAD
       
=======
            <!-- Câu 2 -->
>>>>>>> a67c651da682f9124b7f7c444f7fecbe8c6caf89
            <div class="accordion-item bg-dark text-white border-secondary">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed bg-dark text-white shadow-none fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo">
                        2. Chính sách vận chuyển và chi phí giao hàng như thế nào?
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                    <div class="accordion-body text-secondary">
                        Hikaru Shop hỗ trợ giao hàng toàn quốc. Phí vận chuyển cố định là <strong>20,000 đ</strong> cho mỗi đơn hàng. Đơn hàng nội thành thường nhận sau 1-2 ngày, ngoại thành từ 3-5 ngày làm việc.
                    </div>
                </div>
            </div>

<<<<<<< HEAD
=======
            <!-- Câu 3 -->
>>>>>>> a67c651da682f9124b7f7c444f7fecbe8c6caf89
            <div class="accordion-item bg-dark text-white border-secondary">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed bg-dark text-white shadow-none fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree">
                        3. Hikaru Shop hỗ trợ những hình thức thanh toán nào?
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                    <div class="accordion-body text-secondary">
                        Shop hiện hỗ trợ 2 hình thức thanh toán tiện lợi:
                        <ul class="mt-2 mb-0">
                            <li><strong>COD:</strong> Thanh toán tiền mặt trực tiếp cho nhân viên giao hàng khi nhận sách.</li>
                            <li><strong>Chuyển khoản / QR Code:</strong> Chuyển khoản ngân hàng trực tuyến qua mã QR tự động.</li>
                        </ul>
                    </div>
                </div>
            </div>

<<<<<<< HEAD
=======
            <!-- Câu 4 -->
>>>>>>> a67c651da682f9124b7f7c444f7fecbe8c6caf89
            <div class="accordion-item bg-dark text-white border-secondary">
                <h2 class="accordion-header" id="headingFour">
                    <button class="accordion-button collapsed bg-dark text-white shadow-none fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour">
                        4. Chính sách đổi trả sách khi bị lỗi hoặc hỏng hóc?
                    </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                    <div class="accordion-body text-secondary">
                        Quý khách được đổi trả <strong>miễn phí 100% trong vòng 7 ngày</strong> kể từ khi nhận hàng nếu sách gặp các lỗi từ nhà sản xuất (rách trang, bung keo, in trùng trang, mờ chữ) hoặc bị hư hỏng trong quá trình vận chuyển.
                    </div>
                </div>
            </div>

            <!-- Câu 5 -->
            <div class="accordion-item bg-dark text-white border-secondary">
                <h2 class="accordion-header" id="headingFive">
                    <button class="accordion-button collapsed bg-dark text-white shadow-none fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive">
                        5. Làm thế nào để đăng ký tài khoản và tích điểm thành viên?
                    </button>
                </h2>
                <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                    <div class="accordion-body text-secondary">
                        Bạn bấm vào nút <strong>"Đăng ký"</strong> góc trên màn hình, điền Họ tên, Số điện thoại và Email. Khi mua hàng dưới tài khoản đã đăng ký, hệ thống sẽ tự động tích điểm thưởng để quy đổi voucher cho các lần mua sau.
                    </div>
                </div>
            </div>

            <!-- Câu 6 -->
            <div class="accordion-item bg-dark text-white border-secondary">
                <h2 class="accordion-header" id="headingSix">
                    <button class="accordion-button collapsed bg-dark text-white shadow-none fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix">
                        6. Sách bán tại Hikaru Shop có phải là hàng chính hãng không?
                    </button>
                </h2>
                <div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                    <div class="accordion-body text-secondary">
                        Tất cả các sản phẩm Manga, Light Novel và phụ kiện tại Hikaru Shop đều là <strong>100% bản quyền chính hãng</strong> được nhập từ các NXB uy tín như NXB Kim Đồng, Trẻ, IPM, Amak, Wings Books,...
                    </div>
                </div>
            </div>

            <!-- Câu 7 -->
            <div class="accordion-item bg-dark text-white border-secondary">
                <h2 class="accordion-header" id="headingSeven">
                    <button class="accordion-button collapsed bg-dark text-white shadow-none fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven">
                        7. Tôi muốn kiểm tra tình trạng đơn hàng đã đặt thì làm sao?
                    </button>
                </h2>
                <div id="collapseSeven" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                    <div class="accordion-body text-secondary">
                        Bạn có thể vào trang <strong>Thành Viên</strong> để xem danh sách lịch sử đơn hàng và trạng thái xử lý (Đang chờ duyệt, Đang giao hàng, Hoàn thành).
                    </div>
                </div>
            </div>

            <!-- Câu 8 -->
            <div class="accordion-item bg-dark text-white border-secondary">
                <h2 class="accordion-header" id="headingEight">
                    <button class="accordion-button collapsed bg-dark text-white shadow-none fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight">
                        8. Cách bảo quản truyện tranh đúng cách để không bị ố vàng?
                    </button>
                </h2>
                <div id="collapseEight" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                    <div class="accordion-body text-secondary">
                        Để bảo quản truyện tốt nhất, bạn nên bọc màng bọc/bọc sách nilon chuyên dụng, để sách ở nơi khô ráo thoáng mát, tránh ánh nắng trực tiếp từ mặt trời và hạn chế để sách ở những nơi có độ ẩm cao.
                    </div>
                </div>
            </div>

<<<<<<< HEAD
=======
            <!-- Câu 9 -->
>>>>>>> a67c651da682f9124b7f7c444f7fecbe8c6caf89
            <div class="accordion-item bg-dark text-white border-secondary">
                <h2 class="accordion-header" id="headingNine">
                    <button class="accordion-button collapsed bg-dark text-white shadow-none fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNine">
                        9. Shop có hỗ trợ đặt trước (Pre-order) các phiên bản giới hạn không?
                    </button>
                </h2>
                <div id="collapseNine" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                    <div class="accordion-body text-secondary">
                        Có. Với các tựa truyện ra mắt phiên bản đặc biệt (Limited / Boxset), shop sẽ mở nhận đặt trước trên trang chủ và Fanpage. Bạn nên theo dõi thường xuyên để không bỏ lỡ!
                    </div>
                </div>
            </div>

<<<<<<< HEAD
=======
            <!-- Câu 10 -->
>>>>>>> a67c651da682f9124b7f7c444f7fecbe8c6caf89
            <div class="accordion-item bg-dark text-white border-secondary">
                <h2 class="accordion-header" id="headingTen">
                    <button class="accordion-button collapsed bg-dark text-white shadow-none fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTen">
                        10. Tôi muốn hủy đơn hàng đã đặt thì phải làm thế nào?
                    </button>
                </h2>
                <div id="collapseTen" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                    <div class="accordion-body text-secondary">
                        Nếu đơn hàng của bạn chưa chuyển sang trạng thái "Đang giao", bạn có thể liên hệ trực tiếp với bộ phận chăm sóc khách hàng qua Hotline <strong>1900 6868</strong> hoặc Fanpage để được hỗ trợ hủy đơn miễn phí.
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<?php
_footer();
?>