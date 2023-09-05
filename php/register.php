<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="../css/dangky.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div id="menu">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" id="logo"  href="#">DiĐộng<span>Shop</span></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul style="justify-content: center;" class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Khuyến Mại</a>
                  </li>
                  <li class="nav-item active">
                    <a class="nav-link" href="#">Tin Tức</a>
                  </li>
                <li class="nav-item dropdown active">
                    <a  class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Sản Phẩm
                    </a>
                    <div style="border: none;" class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="#">Macbook</a>
                      <a class="dropdown-item" href="#">Lapgaming</a>
                      <a class="dropdown-item" href="#">Phụ Kiện</a>
                      <a class="dropdown-item" href="#">Linh Kiện</a>
                    </div>
                </li>

                <li class="nav-item active">
                    <a class="nav-link" href="#">Liên Hệ</a>
                  </li>
              </ul>
              <form class="form-inline my-2 my-lg-0">
                <button class="btn my-2 my-sm-0 " type="submit" href="../php/login.php">Đăng Nhập</button>
              </form>
            </div>
        </nav>
    </div>

    <div class="container">
        <div class="from-box">
                <h2>Đăng Ký</h2>

                <form method="post" action="../php/check-register.php">

                    <div class="input-box">
                        <input type="text" name="Name" placeholder="Tên Đăng Nhập">
                    </div>
                    <?php if (isset($_GET['error'])) { ?>
                            <p class="error"> <?php echo $_GET['error']; ?> </p>
                    <?php } ?>
                    
                    <div class="input-box">
                        <input type="email" name="Email" placeholder="Email">
                    </div>
                    <?php if (isset($_GET['error_email'])) { ?>
                            <p class="error"> <?php echo $_GET['error_email']; ?> </p>
                    <?php } ?>
                    
                    <div class="input-box">
                        <input type="text" name="Phone" placeholder="Số Điện Thoại">
                    </div>
                    <?php if (isset($_GET['error_phone'])) { ?>
                            <p class="error"> <?php echo $_GET['error_phone']; ?> </p>
                    <?php } ?>

                    <div class="input-box">
                        <input type="password" name="Password" id="pass" placeholder="Mật Khẩu">
                    </div>
                    <div class="check">
                        <input type="checkbox" onclick= See_Pass() > Hiển thị mật khẩu
                    </div>
                    <?php if (isset($_GET['error_pass'])) { ?>
                            <p class="error"> <?php echo $_GET['error_pass']; ?> </p>
                    <?php } ?>

                    <div class="input-box">
                        <input type="password" name="cPassword" id="pa" placeholder="Nhập Lại Mật Khẩu">
                    </div>
                    <div class="check">
                        <input type="checkbox"  onclick= See_Pass2() > Hiển thị mật khẩu
                    </div>
                    <?php if (isset($_GET['error_pass2'])) { ?>
                            <p class="error"> <?php echo $_GET['error_pass2']; ?> </p>
                    <?php } ?>

                    <div class="singup">
                        <input class="btn" type="submit" name="submit" value="Đăng Ký">
                    </div>
                    <?php if (isset($_GET['DK'])) { ?>
                            <p class="success"> <?php echo $_GET['DK']; ?> </p>
                    <?php } ?>
                </form>

                <div class="box-hr">
                    <div class="hr"></div>
                    <span class="text-hr"> Hoặc </span>
                    <div class="hr"></div>
                </div>
                <div class="DK">
                    <div class="box-dk center">
                        <img class="img" src="../img/Facebook_f_logo_(2019).svg.png">
                        <span> Facebook </span>
                    </div>
                    <div class="box-dk center">
                        <img class="img" src="../img/Google__G__Logo.svg.png">
                        <span> Google </span>
                    </div>
                </div>
                <div class="text">
                    Bằng việc đăng kí, bạn đã đồng ý với Di Động Shop về điều khoản và chính sách bảo mật
                </div>
                <div class="login">
                    <ul>
                        <li>Bạn đã có tài khoản</li>
                        <li><a href="../php/login.php">Đăng nhập</a></li>
                    </ul>
                </div>
        </div>
    </div>
    <script src="../js/dangky.js"> </script>
</body>

</html>