<!DOCTYPE html>
<html lang="en">
<?php
    include_once('connect.php');
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="../css/dangnhap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div >
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" id="logo"  href="home.php">DiĐộng<span>Shop</span></a>
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
                

                <li class="nav-item active">
                    <a class="nav-link" href="#">Liên Hệ</a>
                  </li>
              </ul>
              <form class="form-inline my-2 my-lg-0">
                <button class="btn my-2 my-sm-0 " type="submit">Đăng Nhập</button>
              </form>
            </div>
        </nav>
    </div>

    <div class="container">
        <div class="from-box">
            <form method="post" action="check.php">
                <h2>Đăng Nhập</h2>
                    <div class="input-box">
                        <input type="text"  name="Name" placeholder="Tên Đăng Nhập">
                    </div>
                    <div class="input-box">
                        <input type="password" name="Pass" id="pass" placeholder="Mật Khẩu">
                    </div>
                    <div class="check-box">
                        <input type="checkbox" name="See-pass" onclick= See_Pass() > Hiển thị mật khẩu
                    </div>
                    <?php if (isset($_GET['error'])) { ?>
                        <p class="error"> <?php echo $_GET['error']; ?> </p>
                    <?php } ?>
                    <div class="singup">
                        <input class="btn" type="submit" value="Đăng Nhập">
                    </div>
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
                    <div class="login">
                        <ul>
                            <li>Bạn chưa có tài khoản</li>
                            <li><a href="../php/register.php">Đăng Ký</a></li>
                        </ul>
                    </div>
            </form>
        </div>
    </div>
    <script>
        function See_Pass()
        {
            let password = document.getElementById('pass');
            password.type = password.type == 'text' ? 'password' : 'text';
        }

    </script>
</body>

</html>