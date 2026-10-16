<?php
include 'inc/database.php';

<<<<<<< HEAD
=======
// Xử lý đăng nhập PHẢI nằm trước mọi lệnh xuất HTML
>>>>>>> a67c651da682f9124b7f7c444f7fecbe8c6caf89
if (isset($_POST['emailphone']) && isset($_POST['password'])) {
    $emailphone = trim($_POST['emailphone']);
    $password = $_POST['password'];
    
    if (is_numeric($emailphone)) {
        $q = Database::query("SELECT * FROM users WHERE phone='".$emailphone."' AND password='".$password."'");
    } else {
        $q = Database::query("SELECT * FROM users WHERE email='".$emailphone."' AND password='".$password."'");
    }

    if ($r = $q->fetch_array()) {
        if ($r['role'] == 'admin') {
            header('location: admin.php'); 
            exit();
        } else {
            $_SESSION['user'] = $r;
            header('location: index.php'); 
            exit();
        }
    } else {
        $_SESSION['login_fail'] = "Email/SĐT hoặc Mật khẩu không chính xác!";
        header('location: login.php'); 
        exit();
    }
}

_header('Đăng Nhập - Hikaru Shop');
navbar();
login_form();
_footer();

function login_form() {
    $s = '
    <section class="py-5 my-3">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-6 col-lg-5">
            <div class="card border-0 shadow-sm p-4 p-md-5 rounded-3 bg-white">
              
              <div class="text-center mb-4">
                <h3 class="fw-bold text-dark"><i class="fa-solid fa-user-shield text-success me-2"></i>Đăng Nhập</h3>
                <p class="text-muted small">Chào mừng bạn đến với Hikaru Shop</p>
              </div>';

              if (isset($_SESSION['login_fail'])) {
                  $s .= '<div class="alert alert-danger border-0 text-danger py-2 mb-4 text-center small bg-danger-subtle">'.$_SESSION['login_fail'].'</div>';
                  unset($_SESSION['login_fail']);
              }

              $s .= '
              <form action="" method="post">
                <div class="mb-3">
                  <label class="form-label text-secondary small">Email hoặc Số điện thoại</label>
                  <input type="text" name="emailphone" class="form-control p-2 border" placeholder="Nhập email hoặc SĐT..." required />
                </div>

                <div class="mb-3">
                  <label class="form-label text-secondary small">Mật khẩu</label>
                  <input type="password" name="password" class="form-control p-2 border" placeholder="••••••••" required />
                </div>

                <button type="submit" class="btn btn-success w-100 py-2 fw-bold mb-3">Đăng Nhập</button>

                <div class="text-center text-muted small">
                  Chưa có tài khoản? <a href="register.php" class="text-success fw-bold">Đăng ký ngay</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>';
    echo $s;
}
?>