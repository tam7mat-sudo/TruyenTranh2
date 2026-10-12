<?php
include 'inc/database.php';

// Xử lý khi người dùng bấm nút Xác Nhận Đặt Hàng
$orderSuccess = false;
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_SESSION['cart']) && count($_SESSION['cart']) > 0) {
    unset($_SESSION['cart']);
    $orderSuccess = true;
}

_header('Thanh Toán Đơn Hàng - Otaku Realm');
navbar();

// Lấy thông tin user nếu đã đăng nhập để điền sẵn
$userName = isset($_SESSION['user']) ? $_SESSION['user']['name'] : '';
$userPhone = isset($_SESSION['user']) ? $_SESSION['user']['phone'] : '';
$userEmail = isset($_SESSION['user']) ? $_SESSION['user']['email'] : '';
?>

<section class="container my-5">
    <div class="text-center mb-4">
        <h2 class="fw-bold text-white"><i class="fa-solid fa-credit-card text-danger me-2"></i>Thanh Toán Đơn Hàng</h2>
        <p class="text-secondary small">Vui lòng kiểm tra lại thông tin và xác nhận đặt hàng</p>
    </div>

    <?php if ($orderSuccess): ?>
        <!-- HIỆN THÔNG BÁO KHI ĐẶT HÀNG THÀNH CÔNG -->
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">
                <div class="card manga-card border-secondary p-5 text-center bg-dark text-white shadow-lg rounded-4">
                    <div class="mb-4">
                        <div class="d-inline-flex align-items-center justify-content-center bg-danger bg-opacity-10 text-danger rounded-circle" style="width: 80px; height: 80px;">
                            <i class="fa-solid fa-check fs-1"></i>
                        </div>
                    </div>
                    <h3 class="fw-bold text-white mb-3">Đặt Hàng Thành Công!</h3>
                    <p class="text-secondary mb-4">Cảm ơn bạn đã mua sắm tại <span class="text-danger fw-bold">OTAKU REALM</span>. Đơn hàng của bạn đang được xử lý và sẽ sớm được giao tới!</p>
                    <a href="index.php" class="btn btn-manga py-3 fw-bold text-uppercase rounded-pill shadow">
                        <i class="fa-solid fa-house me-2"></i>Về Trang Chủ Tiếp Tục Mua Sắm
                    </a>
                </div>
            </div>
        </div>
    <?php else: ?>
        <!-- FORM NHẬP THÔNG TIN THANH TOÁN -->
        <form action="" method="POST">
            <div class="row g-4">
                <!-- Cột trái: Thông tin nhận hàng & phương thức thanh toán -->
                <div class="col-lg-7">
                    <!-- Thông tin giao hàng -->
                    <div class="card manga-card p-4 mb-4 bg-dark border-secondary">
                        <h5 class="fw-bold text-white mb-3"><i class="fa-solid fa-user-pen text-danger me-2"></i>Thông Tin Giao Hàng</h5>
                        <hr class="border-secondary">
                        
                        <div class="mb-3">
                            <label class="form-label text-secondary small">Họ và Tên người nhận</label>
                            <input type="text" name="fullname" class="form-control bg-dark text-white border-secondary p-3" value="<?php echo htmlspecialchars($userName); ?>" placeholder="Nhập họ và tên..." required />
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label text-secondary small">Số điện thoại</label>
                                <input type="text" name="phone" class="form-control bg-dark text-white border-secondary p-3" value="<?php echo htmlspecialchars($userPhone); ?>" placeholder="Nhập số điện thoại..." required />
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label text-secondary small">Email xác nhận</label>
                                <input type="email" name="email" class="form-control bg-dark text-white border-secondary p-3" value="<?php echo htmlspecialchars($userEmail); ?>" placeholder="Nhập địa chỉ email..." required />
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label text-secondary small">Địa chỉ nhận hàng chi tiết</label>
                            <textarea name="address" class="form-control bg-dark text-white border-secondary p-3" rows="3" placeholder="Số nhà, tên đường, phường/xã, quận/huyện, tỉnh/thành phố..." required></textarea>
                        </div>

                        <div class="mb-0">
                            <label class="form-label text-secondary small">Ghi chú đơn hàng (Tùy chọn)</label>
                            <input type="text" name="note" class="form-control bg-dark text-white border-secondary p-2" placeholder="Ví dụ: Giao hàng giờ hành chính..." />
                        </div>
                    </div>

                    <!-- Phương thức thanh toán (Có COD và Chuyển khoản qua logo .jpg) -->
                    <div class="card manga-card p-4 bg-dark border-secondary">
                        <h5 class="fw-bold text-white mb-3"><i class="fa-solid fa-wallet text-danger me-2"></i>Phương Thức Thanh Toán</h5>
                        <hr class="border-secondary">
                        
                        <!-- COD -->
                        <div class="form-check p-3 rounded border border-secondary bg-black mb-3">
                            <input class="form-check-input mt-1 ms-1" type="radio" name="payment_method" id="cod" value="cod" checked>
                            <label class="form-check-label text-white fw-semibold ms-2" for="cod">
                                <i class="fa-solid fa-truck-fast text-danger me-2"></i>Thanh toán khi nhận hàng (COD)
                            </label>
                            <p class="text-secondary small ms-4 mb-0 mt-1">Thanh toán tiền mặt trực tiếp cho shipper khi nhận hàng.</p>
                        </div>

                        <!-- Chuyển khoản ngân hàng qua logo .jpg -->
                        <div class="form-check p-3 rounded border border-secondary bg-black">
                            <input class="form-check-input mt-1 ms-1" type="radio" name="payment_method" id="bank" value="bank">
                            <label class="form-check-label text-white fw-semibold ms-2" for="bank">
                                <i class="fa-solid fa-building-columns text-success me-2"></i>Chuyển Khoản Ngân Hàng / Quét Mã QR
                            </label>
                            <p class="text-secondary small ms-4 mb-2 mt-1">Chọn ngân hàng thanh toán trực tuyến:</p>
                            
                            <div class="ms-4 d-flex flex-wrap gap-3 align-items-center pt-1">
                                <div class="border border-secondary rounded p-1 bg-white" style="width: 65px; height: 38px; display: flex; align-items: center; justify-content: center;">
                                    <img src="accets/icon/images.jpg" class="img-fluid" style="max-height: 28px; object-fit: contain;" alt="ACB">
                                </div>
                                <div class="border border-secondary rounded p-1 bg-white" style="width: 65px; height: 38px; display: flex; align-items: center; justify-content: center;">
                                    <img src="accets/icon/agribank.jpg" class="img-fluid" style="max-height: 28px; object-fit: contain;" alt="Agribank">
                                </div>
                                <div class="border border-secondary rounded p-1 bg-white" style="width: 65px; height: 38px; display: flex; align-items: center; justify-content: center;">
                                    <img src="accets/icon/msb.jpg" class="img-fluid" style="max-height: 28px; object-fit: contain;" alt="MSB">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Cột phải: Tóm tắt đơn hàng -->
                <div class="col-lg-5">
                    <div class="card manga-card p-4 bg-dark border-secondary sticky-top" style="top: 90px;">
                        <h5 class="fw-bold text-white mb-3"><i class="fa-solid fa-receipt text-danger me-2"></i>Đơn Hàng Của Bạn</h5>
                        <hr class="border-secondary">

                        <div style="max-height: 300px; overflow-y: auto;" class="pe-2">
                            <?php
                            $subtotal = 0;
                            if(isset($_SESSION['cart']) && is_array($_SESSION['cart']) && count($_SESSION['cart']) > 0) {
                                foreach($_SESSION['cart'] as $item) {
                                    $itemTotal = $item['price'] * $item['quantity'];
                                    $subtotal += $itemTotal;
                                    echo '
                                    <div class="d-flex align-items-center mb-3 pb-3 border-bottom border-secondary">
                                        <img src="accets/images/'.$item['image'].'" class="rounded" style="width: 50px; height: 70px; object-fit: cover;" alt="'.$item['name'].'">
                                        <div class="ms-3 flex-grow-1 overflow-hidden">
                                            <h6 class="text-white text-truncate mb-1 small fw-bold">'.$item['name'].'</h6>
                                            <span class="text-secondary small">SL: '.$item['quantity'].' x '.number_format($item['price']).'đ</span>
                                        </div>
                                        <span class="text-danger fw-bold small">'.number_format($itemTotal).' đ</span>
                                    </div>';
                                }
                            } else {
                                echo '<p class="text-secondary text-center py-3">Giỏ hàng trống!</p>';
                            }
                            $shipping = ($subtotal > 0) ? 20000 : 0;
                            $total = $subtotal + $shipping;
                            ?>
                        </div>

                        <div class="d-flex justify-content-between mb-2 text-secondary small pt-2">
                            <span>Tạm tính</span>
                            <span class="text-white fw-semibold"><?php echo number_format($subtotal); ?> đ</span>
                        </div>

                        <div class="d-flex justify-content-between mb-3 text-secondary small">
                            <span>Phí vận chuyển</span>
                            <span class="text-white fw-semibold"><?php echo number_format($shipping); ?> đ</span>
                        </div>

                        <hr class="border-secondary">

                        <div class="d-flex justify-content-between mb-4">
                            <span class="text-white fw-bold">Tổng cộng</span>
                            <span class="text-danger fw-bold fs-4"><?php echo number_format($total); ?> đ</span>
                        </div>

                        <?php if($subtotal > 0): ?>
                            <button type="submit" class="btn btn-manga w-100 py-3 fw-bold text-uppercase shadow mb-3">
                                <i class="fa-solid fa-circle-check me-2"></i>Xác Nhận Đặt Hàng
                            </button>
                        <?php endif; ?>

                        <div class="text-center">
                            <a href="cart.php" class="text-secondary small text-decoration-none"><i class="fas fa-long-arrow-alt-left me-1"></i>Quay lại giỏ hàng</a>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    <?php endif; ?>
</section>

<?php
_footer();
?>