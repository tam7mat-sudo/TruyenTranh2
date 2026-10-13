<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
// Bật bộ đệm đầu ra để tránh tuyệt đối lỗi header already sent
ob_start();

class Database {
    static $con;
    public static function getConnection() {
        if (self::$con == null)
            self::$con = new mysqli("localhost", "root", "", "anime_db1");
        return self::$con;
    }
    public static function query($s) {
        return self::getConnection()->query($s);
    }
}

// Hàm thêm giỏ hàng dùng ID làm Key để bắt buộc gộp chung
function addProductToCart($id_product){
    $id_product = intval($id_product);
    $q = Database::query("SELECT * FROM products WHERE id = " . $id_product);
    if($q && $r = $q->fetch_array()){
        if(!isset($_SESSION['cart']) || !is_array($_SESSION['cart'])) {
            $_SESSION['cart'] = array();
        }

        if(isset($_SESSION['cart'][$id_product])) {
            $_SESSION['cart'][$id_product]['quantity'] += 1;
        } else {
            $_SESSION['cart'][$id_product] = array(
                'id'       => $r['id'],
                'name'     => $r['name'],
                'image'    => $r['image'],
                'price'    => $r['price'],
                'quantity' => 1
            );
        }
    }
}

function _header($title) {
    $s = '
    <!DOCTYPE html>
    <html lang="vi">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>'.$title.'</title>
    <!-- Load Bootstrap 5 & FontAwesome -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        body {
            background-color: #f4f6f0;
            color: #333333;
            font-family: "Segoe UI", Roboto, sans-serif;
        }
        /* Style Header Hikaru Shop */
        .hikaru-header {
            background-color: #ffffff;
            border-bottom: 1px solid #e0e0e0;
            padding: 15px 0;
        }
        .hikaru-search-bar .form-control {
            border: 2px solid #4a7c59;
            border-radius: 4px 0 0 4px;
            padding: 10px 15px;
        }
        .hikaru-search-bar .btn-search {
            background-color: #4a7c59;
            color: #fff;
            border: 2px solid #4a7c59;
            border-radius: 0 4px 4px 0;
            padding: 0 25px;
            font-weight: 600;
        }
        .hikaru-search-bar .btn-search:hover {
            background-color: #3a5a40;
            color: #fff;
        }
        /* Style Navigation Bar xanh lá rêu */
        .hikaru-nav {
            background-color: #4a7c59 !important;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        .hikaru-nav .nav-link {
            color: #ffffff !important;
            font-weight: 600;
            text-transform: uppercase;
            font-size: 0.88rem;
            padding: 12px 18px !important;
            transition: 0.2s;
        }
        .hikaru-nav .nav-link:hover {
            background-color: #3a5a40;
        }
        /* Style Card Sản phẩm */
        .manga-card {
            background: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: 8px;
            transition: all 0.3s ease;
            overflow: hidden;
        }
        .manga-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
            border-color: #4a7c59;
        }
        .btn-manga {
            background: #d90429;
            color: #fff;
            border: none;
            font-weight: 600;
            border-radius: 6px;
            transition: 0.2s;
        }
        .btn-manga:hover {
            background: #b7031e;
            color: #fff;
        }
        a { text-decoration: none; }
    </style>
    </head>
    <body>';
    echo $s;
}

function _footer() {
    $s = '
    <footer class="mt-5 pt-5 text-white" style="background-color: #2b3a2f; border-top: 3px solid #4a7c59">
      <section class="container pb-4">
        <div class="row gy-4">
          <div class="col-lg-4 col-md-6">
            <h4 class="fw-bold text-success mb-3"><i class="fa-solid fa-book-open-reader me-2"></i>HIKARU SHOP</h4>
            <p class="text-light small">Thế giới truyện tranh chính hãng, cập nhật Manga mới nhất.</p>
          </div>
          <div class="col-lg-2 col-md-6">
            <h6 class="text-uppercase fw-bold text-light mb-3">Thể Loại</h6>
            <ul class="list-unstyled text-light small">
              <li class="mb-2"><a href="#" class="text-light">Conan</a></li>
              <li class="mb-2"><a href="#" class="text-light">Doraemon</a></li>
              <li class="mb-2"><a href="#" class="text-light">Dragon Ball</a></li>
            </ul>
          </div>
          <div class="col-lg-3 col-md-6">
            <h6 class="text-uppercase fw-bold text-light mb-3">Dịch Vụ Khách Hàng</h6>
            <ul class="list-unstyled text-light small">
              <li class="mb-2"><i class="fa-solid fa-truck me-2 text-warning"></i>Giao hàng hỏa tốc</li>
              <li class="mb-2"><i class="fa-solid fa-shield-halved me-2 text-warning"></i>Đảm bảo chất lượng</li>
            </ul>
          </div>
          <div class="col-lg-3 col-md-6">
            <h6 class="text-uppercase fw-bold text-light mb-3">Liên Hệ</h6>
            <p class="text-light small mb-2"><i class="fa-solid fa-location-dot me-2 text-warning"></i>Đà Nẵng, Việt Nam</p>
            <p class="text-light small"><i class="fa-solid fa-phone me-2 text-warning"></i>1900 6868</p>
          </div>
        </div>
      </section>
      <div class="text-center py-3 text-light small" style="background-color: #1e2821;">
        © 2026 Hikaru Shop - Thế Giới Truyện Tranh Của Bạn.
      </div>
    </footer>
    </body>
    </html>';
    echo $s;
}

function navbar() {
    if(isset($_GET['clear'])) {
        unset($_SESSION['cart']);
        header('location: cart.php');
        exit();
    }

    $totalQuantity = 0;
    if (isset($_SESSION['cart']) && is_array($_SESSION['cart'])) {
        foreach ($_SESSION['cart'] as $item) {
            $totalQuantity += intval($item['quantity']);
        }
    }

    $s = '
    <!-- HEADER TRÊN: Logo, Tìm kiếm, Tài khoản, Giỏ hàng -->
    <div class="hikaru-header">
      <div class="container d-flex justify-content-between align-items-center">
        <!-- Logo -->
        <a class="navbar-brand d-flex align-items-center" href="index.php">
          <img src="accets/icon/logo1.jpg" width="50" height="50" class="rounded-circle me-2">
          <div>
            <span class="fw-black fs-4 text-dark" style="letter-spacing: 1px;">HIKARU<span style="color: #4a7c59;">SHOP</span></span>
            <span class="d-block text-muted" style="font-size: 0.7rem;">THẾ GIỚI TRUYỆN TRANH CỦA BẠN</span>
          </div>
        </a>

        <!-- Thanh tìm kiếm -->
        <form class="d-flex hikaru-search-bar flex-grow-1 mx-4" style="max-width: 550px;" action="index.php" method="get">
            <input class="form-control shadow-none" type="search" placeholder="Nhập từ khóa tìm kiếm..." />
            <button class="btn btn-search" type="submit">Tìm ngay</button>
        </form>

        <!-- Tài khoản & Giỏ hàng -->
        <div class="d-flex align-items-center gap-4">';
        
        if (!isset($_SESSION['user'])) {
            $s .= '<a href="login.php" class="text-dark d-flex align-items-center text-decoration-none fw-semibold">
                    <i class="fa-solid fa-circle-user fs-3 me-2 text-secondary"></i> Tài khoản
                   </a>';
        } else {
            $s .= '<div class="dropdown">
                    <a class="dropdown-toggle text-dark text-decoration-none fw-semibold" href="#" role="button" data-bs-toggle="dropdown">
                        <i class="fa-solid fa-circle-user fs-3 me-2 text-success"></i> Hi, '.tachTen($_SESSION['user']['name']).'
                    </a>
                    <ul class="dropdown-menu shadow">
                        <li><a class="dropdown-item" href="#">Hồ sơ độc giả</a></li>
                        <li><a class="dropdown-item text-danger" href="logout.php">Đăng xuất</a></li>
                    </ul>
                   </div>';
        }

        $s .= '<a href="cart.php" class="d-flex align-items-center text-dark text-decoration-none">
                <i class="fa-solid fa-cart-shopping fs-3 me-2 text-secondary"></i>
                <div>
                   <span class="fw-bold d-block" style="font-size: 0.85rem;">Giỏ hàng (<span id="cart-badge" class="text-danger fw-bold">'.$totalQuantity.'</span>)</span>
                   <span class="text-muted" style="font-size: 0.75rem;">Sản phẩm</span>
                </div>
               </a>
        </div>
      </div>
    </div>

    <!-- MENU NGANG XANH LÁ RÊU -->
    <nav class="navbar navbar-expand-lg hikaru-nav navbar-dark py-0">
      <div class="container">
        <button class="navbar-toggler border-0 my-2" type="button" data-bs-toggle="collapse" data-bs-target="#hikaruNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="hikaruNavbar">
          <ul class="navbar-nav me-auto mb-0">
    <li class="nav-item">
      <a class="nav-link" href="index.php"><i class="fa-solid fa-house me-1"></i> Trang chủ</a>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
        Danh mục
      </a>
      <ul class="dropdown-menu shadow">';
        $q = Database::query("SELECT * FROM categories ORDER BY id ASC");
        while ($r = $q->fetch_array()) {
            $s .= '<li><a class="dropdown-item py-2" href="index.php?id_category='.$r['id'].'">📖 '.$r['name'].'</a></li>';
        }
      $s .= '</ul>
    </li>
    <li class="nav-item"><a class="nav-link" href="lichphathanh.php"><i class="fa-solid fa-calendar-days me-1"></i> Lịch phát hành</a></li>
<li class="nav-item"><a class="nav-link" href="thanhvien.php">Thành viên</a></li>
<li class="nav-item"><a class="nav-link" href="tintuc.php">Tin tức</a></li>
<li class="nav-item"><a class="nav-link" href="huongdan.php">Hướng dẫn cần biết</a></li>
<li class="nav-item"><a class="nav-link" href="about.php">Về Hikaru</a></li>
    </ul> 
        </div>
      </div>
    </nav>

    <!-- AJAX BẮT SỰ KIỆN THÊM GIỎ HÀNG -->
    <script>
    document.addEventListener("click", function(e) {
        const targetButton = e.target.closest(".ajax-add-cart");
        if (targetButton) {
            e.preventDefault();
            const productId = targetButton.getAttribute("data-id");

            fetch("add_cart_ajax.php?id=" + productId)
                .then(response => response.json())
                .then(data => {
                    const badge = document.getElementById("cart-badge");
                    if (badge) {
                        badge.textContent = data.totalQuantity;
                    }

                    const originalText = targetButton.innerHTML;
                    targetButton.innerHTML = \'<i class="fa-solid fa-check me-1"></i> Đã thêm!\';
                    targetButton.classList.remove("btn-manga");
                    targetButton.classList.add("btn-success");

                    setTimeout(() => {
                        targetButton.innerHTML = originalText;
                        targetButton.classList.remove("btn-success");
                        targetButton.classList.add("btn-manga");
                    }, 1000);
                })
                .catch(error => console.error("Lỗi AJAX:", error));
        }
    });
    </script>';
    
    echo $s;
}

function jumbotron() {
    $s = '
    <div class="hero-banner py-4 mb-4" style="background: #e8f0e9; border-bottom: 2px solid #4a7c59;">
      <div class="container py-3">
        <div class="row align-items-center">
          <div class="col-lg-8">
            <span class="badge bg-success px-3 py-2 rounded-pill text-uppercase mb-2"><i class="fa-solid fa-fire me-1"></i> Truyện Bán Chạy</span>';
            if (!isset($_GET['id_category'])) {
                $s .= '<h1 class="display-5 fw-bold text-dark mb-2">Thế Giới Truyện Tranh <span style="color: #4a7c59;">Hikaru Shop</span></h1>';
            } else {
                $q = Database::query("SELECT * FROM categories WHERE id = ".intval($_GET['id_category']));
                $catData = $q->fetch_array();
                $catName = $catData ? $catData['name'] : 'Danh Mục';
                $s .= '<h1 class="display-5 fw-bold text-dark mb-2">Danh Mục: <span style="color: #4a7c59;">'.$catName.'</span></h1>';
            }
            $s .= '<p class="lead text-secondary mb-3">Sở hữu ngay những tập truyện hot nhất với giá siêu ưu đãi!</p>
          </div>
        </div>
      </div>
    </div>';
    echo $s;
}

function body() {
    $s = '<div id="manga-list">';
    
    // Kiểm tra xem người dùng có đang bấm vào "Xem tất cả" của danh mục nào không
    if(!isset($_GET['id_category'])) {
        // Ở trang chủ: Lấy danh sách tất cả các danh mục
        $q = Database::query("SELECT * FROM categories ORDER BY id ASC");
    } else {
        // Khi đã bấm "Xem tất cả": Chỉ lấy đúng danh mục được chọn
        $q = Database::query("SELECT * FROM categories WHERE id = ".intval($_GET['id_category']));
    }

    if ($q) {
        while ($r = $q->fetch_array()) {
            $categoryId = $r['id'];
            $categoryName = $r['name'];
            
            // LOGIC QUAN TRỌNG: 
            // Nếu chưa bấm xem tất cả (!isset($_GET['id_category'])) thì dùng LIMIT 4 (chỉ hiện 4 tấm).
            // Nếu đã bấm xem tất cả thì lấy toàn bộ (không giới hạn LIMIT).
            if (!isset($_GET['id_category'])) {
                $q1 = Database::query("SELECT * FROM products WHERE id_category = $categoryId LIMIT 4");
            } else {
                $q1 = Database::query("SELECT * FROM products WHERE id_category = $categoryId");
            }

            if ($q1 && $q1->num_rows > 0) {
                $s .= '
                <section class="container my-4">
                    <div class="d-flex justify-content-between align-items-center mb-3 border-bottom pb-2">
                        <h4 class="fw-bold mb-0 d-flex align-items-center" style="color: #4a7c59;">
                            <i class="fa-solid fa-bookmark me-2"></i>
                            '.$categoryName.'
                        </h4>';
                
                // Hiển thị nút tương ứng tùy theo trang hiện tại
                if(!isset($_GET['id_category'])) {
                    $s .= '<a href="index.php?id_category='.$categoryId.'" class="btn btn-sm btn-outline-success rounded-pill">Xem tất cả <i class="fa-solid fa-chevron-right ms-1"></i></a>';
                } else {
                    $s .= '<a href="index.php" class="btn btn-sm btn-outline-secondary rounded-pill"><i class="fa-solid fa-arrow-left me-1"></i>Quay lại trang chủ</a>';
                }

                $s .= '</div>
                    <div class="row g-3">';

                while ($r1 = $q1->fetch_array()) {
                    $cartLink = !isset($_SESSION['user']) ? 'login.php' : '#';
                    $classBtn = !isset($_SESSION['user']) ? 'btn-manga' : 'btn-manga ajax-add-cart';
                    $dataAttr = !isset($_SESSION['user']) ? '' : 'data-id="'.$r1['id'].'"';

                    $s .= '
                    <div class="col-6 col-md-4 col-lg-3 d-flex">
                        <div class="card manga-card w-100 d-flex flex-column">
                            <div class="position-relative overflow-hidden">
                                <img src="accets/images/'.$r1['image'].'" class="card-img-top p-2" style="aspect-ratio: 3/4; object-fit: cover;" alt="'.$r1['name'].'" />
                            </div>
                            <div class="card-body d-flex flex-column p-3">
                                <h6 class="card-title fw-bold text-dark mb-2 text-truncate">'.$r1['name'].'</h6>
                                <div class="d-flex align-items-center justify-content-between mt-auto pt-2">
                                    <span class="text-danger fw-bold fs-5">'.number_format($r1['price']).' đ</span>
                                </div>
                                <div class="mt-3">
                                    <a href="'.$cartLink.'" '.$dataAttr.' class="btn '.$classBtn.' w-100 py-2 text-center d-block"><i class="fa-solid fa-cart-plus me-1"></i> ĐẶT MUA</a>
                                </div>
                            </div>
                        </div>
                    </div>';
                }

                $s .= '
                    </div>
                </section>';
            }
        }
    }
    
    $s .= '</div>';
    echo $s;
}


function cart() {
    $subtotal = 0;
    $itemCount = 0;

    if(isset($_SESSION['cart']) && is_array($_SESSION['cart'])){
        foreach($_SESSION['cart'] as $x){
            $subtotal += ($x['price'] * $x['quantity']);
            $itemCount += $x['quantity'];
        }
    }
    $shipping = ($subtotal > 0) ? 20000 : 0;
    $total = $subtotal + $shipping;

    $s = '
    <section class="container my-4">
      <div class="row justify-content-center">
        <div class="col-xl-10">
          <div class="card bg-white border-0 shadow-sm" style="border-radius: 8px;">
            <div class="row g-0">
              
              <div class="col-lg-8 p-4">
                <div class="d-flex justify-content-between align-items-center mb-4 pb-2 border-bottom">
                  <h4 class="fw-bold mb-0 text-dark"><i class="fa-solid fa-cart-shopping text-success me-2"></i>Giỏ Hàng Của Bạn</h4>
                  <div class="d-flex align-items-center gap-3">
                      <span class="text-muted small">Tổng số lượng: <b>'.$itemCount.'</b> cuốn</span>
                      <a href="cart.php?clear=OK" class="btn btn-sm btn-outline-danger py-1 px-2"><i class="fa-solid fa-trash-can me-1"></i>Xóa trống</a>
                  </div>
                </div>';

    if(isset($_SESSION['cart']) && is_array($_SESSION['cart']) && count($_SESSION['cart']) > 0){
        foreach($_SESSION['cart'] as $x){
            $itemTotal = $x['price'] * $x['quantity'];
            $s .= '
                <div class="row align-items-center mb-3 pb-3 border-bottom g-2">
                  <div class="col-3 col-md-2">
                    <img src="accets/images/'.$x['image'].'" class="img-fluid rounded shadow-sm" style="width: 60px; height: 80px; object-fit: cover;" alt="'.$x['name'].'">
                  </div>
                  <div class="col-9 col-md-4">
                    <h6 class="mb-0 text-dark fw-semibold text-truncate">'.$x['name'].'</h6>
                    <span class="text-danger small">'.number_format($x['price']).' đ</span>
                  </div>
                  <div class="col-6 col-md-3 text-center">
                    <span class="badge bg-light text-dark border px-3 py-2">SL: '.$x['quantity'].'</span>
                  </div>
                  <div class="col-5 col-md-2 text-end">
                    <span class="text-danger fw-bold">'.number_format($itemTotal).' đ</span>
                  </div>
                </div>';
        }
    } else {
        $s .= '<div class="text-center py-4 text-muted">Giỏ hàng của bạn đang trống!</div>';
    }

    $s .= '
                <div class="mt-3">
                  <a href="index.php" class="text-success text-decoration-none small fw-bold"><i class="fas fa-long-arrow-alt-left me-1"></i>Tiếp tục mua sắm</a>
                </div>
              </div>
              
              <div class="col-lg-4 bg-light p-4 d-flex flex-column justify-content-between" style="border-left: 1px solid #e2e8f0;">
                <div>
                  <h5 class="fw-bold mb-4 text-dark">Tổng Quan Đơn Hàng</h5>
                  <hr class="my-3">

                  <div class="d-flex justify-content-between mb-3 text-secondary small">
                    <span>Tạm tính</span>
                    <span class="text-dark fw-semibold">'.number_format($subtotal).' đ</span>
                  </div>

                  <div class="d-flex justify-content-between mb-3 text-secondary small">
                    <span>Phí vận chuyển</span>
                    <span class="text-dark fw-semibold">'.number_format($shipping).' đ</span>
                  </div>

                  <hr class="my-3">

                  <div class="d-flex justify-content-between mb-4">
                    <span class="text-dark fw-bold">Tổng thanh toán</span>
                    <span class="text-danger fw-bold fs-5">'.number_format($total).' đ</span>
                  </div>
                </div>

                <a href="checkout.php" class="btn btn-success w-100 py-2 fw-bold text-center text-white text-decoration-none shadow-sm">
                  Tiến Hành Thanh Toán
                </a>

              </div>

            </div>
          </div>
        </div>
      </div>
    </section>';
    
    echo $s;
}

function tachTen($hoten) {
    $arr = explode(' ', $hoten);
    return end($arr);
}
?>