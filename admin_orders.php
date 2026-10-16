<?php
include 'inc/database.php';

<<<<<<< HEAD
=======
// Kiểm tra bảo mật phân quyền Super Admin
>>>>>>> a67c651da682f9124b7f7c444f7fecbe8c6caf89
if (!isset($_SESSION['user']) || ($_SESSION['user']['role'] ?? '') !== 'admin') {
    header('location: login.php');
    exit();
}

<<<<<<< HEAD
=======
// Xử lý cập nhật trạng thái đơn hàng (nếu có yêu cầu từ admin)
>>>>>>> a67c651da682f9124b7f7c444f7fecbe8c6caf89
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['update_status'])) {
    $order_id = intval($_POST['order_id']);
    $new_status = $_POST['status'];
    
<<<<<<< HEAD
=======
    // Cập nhật trạng thái đơn hàng trong database
>>>>>>> a67c651da682f9124b7f7c444f7fecbe8c6caf89
    $stmt = $pdo->prepare("UPDATE orders SET status = ? WHERE id = ?");
    $stmt->execute([$new_status, $order_id]);
    header('location: admin_orders.php?success=1');
    exit();
}

_header("Quản Trị Cấp Cao - OTAKU REALM");
navbar();

<<<<<<< HEAD
=======
// Lấy danh sách đơn hàng từ CSDL
>>>>>>> a67c651da682f9124b7f7c444f7fecbe8c6caf89
try {
    $stmt = $pdo->query("SELECT * FROM orders ORDER BY id DESC");
    $orders = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (Exception $e) {
    $orders = [];
}
?>

<div class="container my-5">
<<<<<<< HEAD
=======
    <!-- Header khu vực tối cao của Admin -->
>>>>>>> a67c651da682f9124b7f7c444f7fecbe8c6caf89
    <div class="card manga-card p-4 mb-4 border-danger bg-dark">
        <div class="row align-items-center">
            <div class="col-md-8">
                <div class="d-flex align-items-center gap-3">
                    <div class="bg-danger p-3 rounded-3 text-white fs-2 shadow">
                        <i class="fa-solid fa-crown text-warning"></i>
                    </div>
                    <div>
                        <span class="badge bg-warning text-dark fw-bold mb-1 px-2 py-1"><i class="fa-solid fa-shield-halved me-1"></i> SUPREME ADMIN</span>
                        <h2 class="fw-bold text-white mb-0">Hệ Thống Quản Trị Cấp Cao</h2>
                        <p class="text-secondary small mb-0 mt-1">Xin chào Chủ Quản, <strong><?= htmlspecialchars($_SESSION['user']['name']) ?></strong> (nthanh777@gmail.com). Toàn quyền kiểm soát hệ thống đơn hàng Otaku Realm.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 text-md-end mt-3 mt-md-0">
                <a href="index.php" class="btn btn-outline-danger px-4 py-2 fw-bold">
                    <i class="fa-solid fa-store me-2"></i>Xem Cửa Hàng
                </a>
            </div>
        </div>
    </div>

    <?php if (isset($_GET['success'])): ?>
        <div class="alert alert-success bg-dark text-success border-success mb-4 py-3 shadow-sm">
            <i class="fa-solid fa-circle-check me-2"></i> Cập nhật trạng thái đơn hàng thành công!
        </div>
    <?php endif; ?>

<<<<<<< HEAD
=======
    <!-- Khu vực danh sách đơn hàng -->
>>>>>>> a67c651da682f9124b7f7c444f7fecbe8c6caf89
    <div class="card manga-card p-4 bg-dark text-white border-secondary">
        <h4 class="fw-bold mb-4 d-flex align-items-center text-white">
            <span class="bg-danger rounded-3 p-2 me-2 d-inline-flex"><i class="fa-solid fa-clipboard-list fs-5 text-white"></i></span>
            Quản Lý Toàn Bộ Đơn Đặt Hàng
        </h4>

        <div class="table-responsive">
            <table class="table table-dark table-hover align-middle border-secondary mb-0">
                <thead>
                    <tr class="text-secondary small border-bottom border-secondary">
                        <th class="py-3">MÃ ĐƠN</th>
                        <th class="py-3">NGƯỜI NHẬN</th>
                        <th class="py-3">ĐIỆN THOẠI & ĐỊA CHỈ</th>
                        <th class="py-3">TỔNG TIỀN</th>
                        <th class="py-3">THANH TOÁN</th>
                        <th class="py-3">TRẠNG THÁI ĐƠN HÀNG</th>
                        <th class="py-3 text-center">THAO TÁC</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (empty($orders)): ?>
                        <tr>
                            <td colspan="7" class="text-center text-secondary py-5">
                                <i class="fa-solid fa-box-open fs-1 mb-2 d-block text-muted"></i>
                                Hiện tại chưa có đơn hàng nào được đặt.
                            </td>
                        </tr>
                    <?php else: ?>
                        <?php foreach ($orders as $o): ?>
                            <tr>
                                <td class="fw-bold text-danger">#<?= $o['id'] ?></td>
                                <td>
                                    <div class="fw-bold text-white"><?= htmlspecialchars($o['fullname'] ?? 'N/A') ?></div>
                                    <div class="text-secondary small"><?= htmlspecialchars($o['email'] ?? '') ?></div>
                                </td>
                                <td>
                                    <div class="text-white small"><i class="fa-solid fa-phone me-1 text-warning"></i><?= htmlspecialchars($o['phone'] ?? 'N/A') ?></div>
                                    <div class="text-secondary small text-truncate" style="max-width: 200px;" title="<?= htmlspecialchars($o['address'] ?? '') ?>">
                                        <i class="fa-solid fa-location-dot me-1 text-danger"></i><?= htmlspecialchars($o['address'] ?? 'N/A') ?>
                                    </div>
                                    <?php if (!empty($o['note'])): ?>
                                        <div class="text-info small fst-italic">Ghi chú: <?= htmlspecialchars($o['note']) ?></div>
                                    <?php endif; ?>
                                </td>
                                <td class="fw-bold text-danger fs-6">
                                    <?= number_format($o['total_price'] ?? 0) ?> đ
                                </td>
                                <td>
                                    <?php if (($o['payment_method'] ?? 'COD') === 'BANK'): ?>
                                        <span class="badge bg-info text-dark p-2 fw-bold"><i class="fa-solid fa-qrcode me-1"></i> QR Bank</span>
                                    <?php else: ?>
                                        <span class="badge bg-secondary p-2 fw-bold"><i class="fa-solid fa-truck-fast me-1"></i> COD</span>
                                    <?php endif; ?>
                                </td>
                                <td>
<<<<<<< HEAD
=======
                                    <!-- Form tự động đổi trạng thái ngay khi chọn -->
>>>>>>> a67c651da682f9124b7f7c444f7fecbe8c6caf89
                                    <form action="admin_orders.php" method="post" class="d-inline">
                                        <input type="hidden" name="order_id" value="<?= $o['id'] ?>">
                                        <input type="hidden" name="update_status" value="1">
                                        <select name="status" class="form-select form-select-sm bg-dark text-white border-secondary fw-bold" onchange="this.form.submit()">
                                            <option value="pending" <?= ($o['status'] ?? '') === 'pending' ? 'selected' : '' ?>>⏳ Chờ xử lý</option>
                                            <option value="shipping" <?= ($o['status'] ?? '') === 'shipping' ? 'selected' : '' ?>>🚚 Đang giao hàng</option>
                                            <option value="completed" <?= ($o['status'] ?? '') === 'completed' ? 'selected' : '' ?>>✅ Hoàn thành</option>
                                            <option value="cancelled" <?= ($o['status'] ?? '') === 'cancelled' ? 'selected' : '' ?>>❌ Đã hủy</option>
                                        </select>
                                    </form>
                                </td>
                                <td class="text-center">
                                    <button type="button" class="btn btn-sm btn-outline-light px-3" data-bs-toggle="modal" data-bs-target="#orderModal<?= $o['id'] ?>">
                                        <i class="fa-solid fa-eye"></i> Chi tiết
                                    </button>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php
_footer();
?>