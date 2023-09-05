<!DOCTYPE html>
<html lang="en">
<?php
    include_once('connect.php');
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DiDongShop</title>
    <link rel="stylesheet" href="../css/style-3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />

</head>

<body>
    <!-- <div id="comeheader"></div> -->
    <section id="comeheader">
        <div id="menu">
            <nav class="navbar navbar-expand-lg navbar-light bg-light " id="menu">
                <a class="navbar-brand" id="logo" href="home.php">DiĐộng<span>Shop</span></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
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
                            <a class="nav-link" href="#">Hỏi Đáp</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Liên Hệ</a>
                        </li>
                    </ul>
                    <form class="form-inline my-2 my-lg-0" action="login.php">
                        <button style="margin-right: 100px;" class="btn my-2 my-sm-0 "  type="submit" >Đăng Nhập</button>
                    </form>
                </div>
            </nav>
        </div>

        <!-- lấy data danh mục sản phẩm -->
        <?php
            $sql_danhmuc = mysqli_query($conn,'SELECT * FROM danhmuc ORDER BY danhmuc.ID ASC');
        ?>
        <div class="menu2">
            
                <ul>
                    <li class="nav-item dropdown active">
                        <a class="nav-link1 dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Danh Mục Sản Phẩm
                        </a>
                        <div style="border: none;" class="dropdown-menu" aria-labelledby="navbarDropdown">
                            
                            <?php
                                while ($row_danhmuc = mysqli_fetch_array($sql_danhmuc)){
                            ?>
                                <a class="dropdown-item" href="timkiem.php?quanly=danhmuc&id=<?php echo $row_danhmuc['ID'] ?>"> 
                                    <?php echo $row_danhmuc['TenDanhMuc'] ?>
                                </a>
                            <?php
                                }
                            ?>
                        </div>
                    </li>
                </ul>
            
            <div class="main1">
                <!-- Actual search box -->
                <div class="form-group has-search">
                    <span class="fa fa-search form-control-feedback"></span>
                    <input type="text" class="form-control" placeholder="Tìm Kiếm">
                </div>
            </div>
            <div class="main2">

                <a href="html/giohang.html"
                    style="text-decoration: none;  color: #b36982;font-size: 1.1rem;margin-top: 20px;position: relative;margin-left: -270px;"
                    class="fa fa-shopping-cart"> &nbsp Giỏ Hàng</a>

            </div>
        </div>
        <div class="Comemenu">
            <a href="#comeheader"
                style="color: #b36982;float: right;position: fixed;font-size: 2.5rem; margin-top: 30%;text-decoration: none;margin-left: 97%;"
                class="fa fa-chevron-circle-up"></a>
        </div>
        <div class="texts">
            <h1>Di Động <span>Shop</span></h1>
            <p>Chúng tôi là nhà cung cấp laptop “máy tính xách tay” chuyên nghiệp nhất tại thành phố Hồ Chí Minh.
                Đến với chúng tôi quý khách được nhiều sự chọn lựa từ các hãng laptop nhật mỹ hàng đầu trên thế giới.
                Chúng tôi sẽ giúp quý khách tiết kiệm nhất khi mua laptop. Thanh lý mua bán laptop cũ mới giá rẻ.
                Laptop mới tồn kho của các công ty, doanh nghiệp, văn phòng đã qua sử dụng.
            </p>
        </div>

        <div class="background_image">
            <img src="../img/bg1.png">
        </div>
        <div class="btn">
            <p class="read">Tìm Hiểu Thêm</p>
            <p class="read2">Đến Sản Phẩm</p>
        </div>
    </section>
    <div id="demo" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
        </ul>
        <!-- The slideshow -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="img" src="../img/macbook-pro.png">
            </div>
            <div class="carousel-item">
                <img class="img" src="../img/acer.png">
            </div>
            <div class="carousel-item">
                <img class="img" src="../img/gaming.png">
            </div>
        </div>
        <!-- Left and right controls -->
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <i style="color: black;font-weight: bold;font-size: 30px;" class="fa fa-chevron-left"></i>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
            <i style="color: black;font-weight: bold;font-size: 30px;" class="fa fa-chevron-right"></i>
        </a>
    </div>

    <!--About Page-->
    <div class="about">
        <div id="Mac1">
        <h2>Sản Phẩm</h2>
            <!--Lấy data danh mục -->
            <?php
                $sql_danhmun_home = mysqli_query($conn,'SELECT * FROM danhmuc ORDER by danhmuc.ID');
                while($row_danhmun_home = mysqli_fetch_array($sql_danhmun_home)){
                    $id_danhmuc = $row_danhmun_home['ID'];
            ?>
                <div class="MacBook">
                    <p style="font-weight: bold;"> <?php echo $row_danhmun_home['TenDanhMuc'] ?> </p>
                    <div class="MacBook_box">
                        <!--Lấy data sản phẩm -->
                        <?php
                            $sql_sp = mysqli_query($conn,'SELECT * FROM sanpham ORDER BY sanpham.ID');
                            while($row_sp = mysqli_fetch_array($sql_sp))
                            {
                                if($row_sp['Danhmuc_ID'] == $id_danhmuc)
                                {
                        ?>
                            <div class="MacBook_card">
                                <img src="../img/<?php echo $row_sp['Img'] ?>">
                                <h6> <?php echo $row_sp['TenSanPham'] ?> </h6>
                                <p>
                                    Giá chỉ: <span class="span"><?php echo $row_sp['Gia'] ?></span>
                                </p>
                                <a href="?quanly=chitietsp.php&id=<?php echo $row_sp['ID'] ?>" class="btn">Xem Thêm</a>
                            </div>
                        <?php
                                }
                            }
                        ?>
                    </div>
                </div>
            <?php
                }
            ?>
        </div>
    </div>

    <!--fotter-->
    <footer class="footer">
        <div class="main">
            <div class="row">
                <div class="footer_col">
                    <h4>Công Ty</h4>
                    <ul>
                        <li><a href="#">Về Chúng Tôi</a></li>
                        <li><a href="#">Dịch Vụ </a></li>
                        <li><a href="#">Chính Sách</a></li>
                        <li><a href="#">Chương Trình Giảm Giá</a></li>
                    </ul>
                </div>

                <div class="footer_col">
                    <h4>Thông Tin Liên Hệ
                    </h4>
                    <ul>
                        <li><a href="#">Địa Chỉ:68/3 Long Thới Nhà Bè</a></li>
                        <li><a href="#">Số điện thoại:0386950752</a></li>
                        <li><a href="#">Email:Toanb3074@gmail.com</a></li>

                    </ul>
                </div>

                <div class="footer_col">
                    <h4>Chính Sách Mua Hàng</h4>
                    <ul>
                        <li><a href="#">Chính Sách Bảo Hành</a></li>
                        <li><a href="#">Chính sách đổi trả</a></li>
                        <li><a href="#">Chính Sách Tranh Toán</a></li>

                    </ul>
                </div>
                <div class="footer_col">
                    <h4>Hỗ Trợ Khách Hàng</h4>
                    <ul>
                        <li><a href="#">Thẻ Ưu Đãi</a></li>
                        <li><a href="#">Hướng Dẫn Mua Online</a></li>
                        <li><a href="#">Chính Sách Trả Góp</a></li>

                    </ul>
                </div>

                <div style=" margin-left: 480px;" class="footer_col">
                    <h4>Theo Dõi Chúng Tôi</h4>
                    <div style="margin-right: 90px;" class="social">
                        <a href="#"><img src="../img/facebook.png"></a>
                        <a href="#"><img src="../img/Googlell.png"></a>
                        <a href="#"><img src="../img/instagram.png"></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

</body>

</html>