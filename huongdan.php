<?php
include 'inc/database.php';
_header('Hướng Dẫn Cần Biết - Hikaru Shop');
navbar();
?>
<section class="container my-5">
    <div class="card border-0 shadow-sm p-4 bg-white rounded-3">
        <h3 class="fw-bold mb-4" style="color: #4a7c59;"><i class="fa-solid fa-circle-question me-2"></i>HƯỚNG DẪN DÀNH CHO KHÁCH HÀNG</h3>
        <div class="accordion" id="faqAccordion">
            <div class="accordion-item mb-3 border">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button fw-bold text-dark" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne">
                        1. Làm sao để đặt mua truyện trên Hikaru Shop?
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                    <div class="accordion-body text-secondary">
                        Bạn chỉ cần chọn sản phẩm yêu thích, bấm nút "ĐẶT MUA", sau đó vào giỏ hàng và tiến hành điền thông tin giao hàng là hoàn tất.
                    </div>
                </div>
            </div>
            <div class="accordion-item mb-3 border">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed fw-bold text-dark" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo">
                        2. Chính sách vận chuyển và thanh toán như thế nào?
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                    <div class="accordion-body text-secondary">
                        Chúng tôi hỗ trợ giao hàng hỏa tốc qua Grab, VNPost và GHN với mức phí đồng giá tiêu chuẩn cực kỳ ưu đãi.
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
_footer();
?>
