<!DOCTYPE html>
<html lang="en">
    <?php
        include_once('connect.php');
    ?>

    <?php
        if( isset($_GET['id']))
        {
            $id= $_GET['id']; 
        }
        else 
        {
            $id= " ";
        }
        $sql_danhmun = mysqli_query($conn,"SELECT * FROM danhmuc, sanpham where danhmuc.ID = sanpham.DanhMuc_ID and danhmuc.ID = '$id' ORDER by sanpham.ID");              
    ?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DiDongShop</title>
    <link rel="stylesheet" href="../css/tksp.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
</head>

<body>
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
                    <input type="text" class="form-control" placeholder="Search">
                </div>
            </div>
            <div class="main2">

                <a href="html/giohang.html"
                    style="text-decoration: none;  color: #b36982;font-size: 1.1rem;margin-top: 20px;position: relative;margin-left: -270px;"
                    class="fa fa-shopping-cart"> &nbsp Giỏ Hàng</a>

            </div>
        </div>

    </section>

    <div class="main">
        <div class="container-fluid" style="margin-left:5%">
            <div class="row">
                <div class="col-sm-2" >
                    <div class="sibar" style="margin-top: 26px; ">
                        <div class="hangsanxuat">
                            <form action="" method="post">
                                <h5>Tìm Kiếm</h5>
                                <div class="input-group">
                                    <div class="form-outline">
                                        <input type="search" name="tim" class="form-control" placeholder="Nhập Từ Khóa"/>
                                    </div>
                                    <button type="button" class="btn btn-primary" style="position: absolute; right: 4px; top: 0.5px;">
                                        <i class="fas fa-search"></i>
                                    </button>
                                </div>
                            </form>
                        </div>
                        <div class="hangsanxuat">
                            <form action="" method="post">
                                <h5>Hãng Sản Xuất</h5>
                                <div class="checkSS">
                                    <div class="rowss"><input type="checkbox"> Tất cả</div>
                                    <div class="rowss"><input type="checkbox"> Acer</div>
                                    <div class="rowss"> <input type="checkbox"> Asus</div>
                                    <div class="rowss"><input type="checkbox"> Macbook</div>
                                    <div class="rowss"><input type="checkbox"> LG</div>
                                </div>
        
                            </form>
                        </div>

                        <!-- lấy data danh mục sản phẩm -->
                        <?php
                            $sql_danhmuc_con = mysqli_query($conn,'SELECT * FROM danhmuc ORDER BY danhmuc.ID ASC');
                        ?>
                        <div class="hangsanxuat">
                            <form action="" method="post">
                                <h5>Danh Mục</h5>
                                <div class="checkSS">
                                    <?php
                                        while ($row_danhmuc_con = mysqli_fetch_array($sql_danhmuc_con)){
                                    ?>
                                        <div class="rowss" >
                                                <input type="checkbox"  name="check"> <?php echo $row_danhmuc_con['TenDanhMuc'] ?>
                                        </div>
                                    <?php
                                        }
                                    ?>
                                </div>
                            </form>
                        </div>
                        <div class="hangsanxuat">
                            <form  action="" method="post">
                                <h5>Giá</h5>
                                <div class="checkSS">
                                    <div class="rowss"><input type="checkbox"> Dưới 10 triệu</div>

                                </div>
        
                            </form>
                        </div>
  
                        <div class="hangsanxuat">
                            <form>
                                <h5>Màn Hình</h5>
                                <div class="checkSS">
                                    <div class="rowss"><input type="checkbox"> Dưới 10 triệu</div>
                                    <div class="rowss"><input type="checkbox"> Khoảng 13 inch</div>
                                    <div class="rowss"> <input type="checkbox"> Khoảng 14 inch</div>
                                    <div class="rowss"><input type="checkbox"> Trên 15 inch</div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                       <!-- lấy data danh mục sản phẩm -->
                <?php
                    $sql_danhmuc = mysqli_query($conn,'SELECT * FROM danhmuc ORDER BY danhmuc.ID ASC');
                ?>

                <div class="col-sm-9" >
                    <div class="header1_show">
                        <h2>Danh Mục</h2>
                        <div id="Dm-item">
                            <?php
                                while ($row_danhmuc = mysqli_fetch_array($sql_danhmuc)){
                            ?>
                                <div class="card" style="width: 180px;height: 200px;  margin-left: 15px; margin-right: 15px; ">
                                    <a href="timkiem.php?quanly=danhmuc&id=<?php echo $row_danhmuc['ID'] ?>" class="btn stretched-link" style="background-color:white;">
                                        <img class="card-img-top rounded" src="../img/<?php echo $row_danhmuc['Img'] ?>" style=" height: 140px; width: 140px;">
                                        <div class="card-body" style=" padding: 0%; margin-top: 10px">
                                            <h5 class="card-title"><?php echo $row_danhmuc['TenDanhMuc'] ?></h5>
                                        </div>
                                    </a>
                                </div>
                            <?php
                                }
                            ?>
                        </div>
                    </div>
                    <div class="header2_show">
                        <h2 >Sản Phẩm</h2>
                        <div id="Dm-item">
                            <?php
                                while($row_sp = mysqli_fetch_array($sql_danhmun))
                                {
                            ?>
                                <div class="card" >
                                    <a href="#" class="btn stretched-link" style="background-color:white;">
                                        <img class="card-img-top rounded" src="../img/<?php echo $row_sp['Img'] ?>" style=" height: 140px; width: 140px;">
                                        <div class="card-body" style=" padding: 0%; margin-top: 10px;">
                                            <h5 style=" height:50px;" class="card-title"><?php echo $row_sp['TenSanPham'] ?></h5>
                                            <p > Giá chỉ: <span class="span"><?php echo $row_sp['Gia'] ?></span></p>
                                        </div>
                                        <button type="button" class="btn btn-primary">Xem Thêm</button>
                                    </a>
                                </div>

                            <?php
                                }
                            ?>







                        </div>

                    </div>
                </div>

            </div>

            

        </div>
    </div>

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