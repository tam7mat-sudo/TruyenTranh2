<?php
include 'inc/database.php';

$errName = $errEmail = $errPhone = $errPwd = $errRepwd = '';

if($_SERVER['REQUEST_METHOD'] == "POST"){
    if(empty($_POST['name'])) $errName = 'Vui lòng nhập Họ Tên!';
    if(empty($_POST['email'])) $errEmail = 'Vui lòng nhập Email!';
    else {
        if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
            $errEmail = 'Email không hợp lệ!';
    }

    if(empty($_POST['phone'])) $errPhone = 'Vui lòng nhập SĐT!';
    else {
        if(!preg_match('/^[0-9]{10}+$/', $_POST['phone']))
            $errPhone = 'Số điện thoại phải gồm 10 chữ số!';
    }

    if(empty($_POST['pwd'])) $errPwd = 'Vui lòng nhập Mật Khẩu!';
    if(empty($_POST['repwd'])) $errRepwd = 'Vui lòng xác nhận Mật Khẩu!';
    else {
        if($_POST['repwd'] != $_POST['pwd'])
            $errRepwd = 'Mật khẩu nhập lại không khớp!';
    }

    if($errName == '' && $errEmail == '' && $errPhone == '' && $errPwd == '' && $errRepwd == ''){
        Database::query("INSERT INTO users(name, email, phone, password, role) VALUES('".$_POST['name']."', '".$_POST['email']."', '".$_POST['phone']."', '".$_POST['pwd']."', 'user')");
        $q = Database::query("SELECT * FROM users WHERE email='".$_POST['email']."' AND password='".$_POST['pwd']."'");
        $_SESSION['user'] = $q->fetch_array();
        header('location: index.php');
        exit();
    }
}

_header('Đăng Ký Tài Khoản - Hikaru Shop');
navbar();
register_form($errName, $errEmail, $errPhone, $errPwd, $errRepwd);
_footer();

function register_form($errName, $errEmail, $errPhone, $errPwd, $errRepwd) {    
    $s = '
    <section class="py-5 my-3">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-8 col-lg-6">
            <div class="card border-0 shadow-sm p-4 p-md-5 rounded-3 bg-white">
              <div class="text-center mb-4">
                <h3 class="fw-bold text-dark"><i class="fa-solid fa-user-plus text-success me-2"></i>Đăng Ký Tài Khoản</h3>
              </div>
              <form action="" method="post">
                <div class="mb-3">
                  <label class="form-label text-secondary small">Họ và Tên</label>
                  <input type="text" name="name" class="form-control p-2 border" value="'.($_POST['name'] ?? '').'" />
                  <div class="text-danger small mt-1">'.$errName.'</div>
                </div>

                <div class="mb-3">
                  <label class="form-label text-secondary small">Địa chỉ Email</label>
                  <input type="text" name="email" class="form-control p-2 border" value="'.($_POST['email'] ?? '').'" />
                  <div class="text-danger small mt-1">'.$errEmail.'</div>
                </div>

                <div class="mb-3">
                  <label class="form-label text-secondary small">Số điện thoại</label>
                  <input type="text" name="phone" class="form-control p-2 border" value="'.($_POST['phone'] ?? '').'" />
                  <div class="text-danger small mt-1">'.$errPhone.'</div>
                </div>

                <div class="mb-3">
                  <label class="form-label text-secondary small">Mật khẩu</label>
                  <input type="password" name="pwd" class="form-control p-2 border" />
                  <div class="text-danger small mt-1">'.$errPwd.'</div>
                </div>

                <div class="mb-3">
                  <label class="form-label text-secondary small">Nhập lại mật khẩu</label>
                  <input type="password" name="repwd" class="form-control p-2 border" />
                  <div class="text-danger small mt-1">'.$errRepwd.'</div>
                </div>

                <button type="submit" class="btn btn-success w-100 py-2 fw-bold">Đăng Ký Ngay</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>';
    echo $s;
}
?>