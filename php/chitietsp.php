<!DOCTYPE html>
<html lang="en">
<?php
    include_once('connect.php');
?>
<head>
    <meta charset="UTF-8">
    <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style-3.css">
    <link rel="stylesheet" href="../css/chitet2.css">
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
            <div  class="menu-main col-lg-4 col-sm-4">
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
                                <a class="dropdown-item" href="chitietsp.php?quanly=danhmuc&id= <?php echo $row_danhmuc['ID'] ?>"> 
                                    <?php echo $row_danhmuc['TenDanhMuc'] ?>
                                </a>
                            <?php
                                }
                            ?>
                        </div>
                    </li>
                </ul>
            </div>
            
            <div class="main1 col-lg-4 col-sm-4">
                <!-- Actual search box -->
                <div class="form-group has-search">
                    <span class="fa fa-search form-control-feedback"></span>
                    <input type="text" class="form-control" placeholder="Search">
                </div>
            </div>
            <div class="main2 col-lg-4 col-sm-4">
                <div class="gio-hang">
                    <a href="html/giohang.html"
                    style="text-decoration: none;  color: #b36982;font-size: 1.1rem;"
                    class="fa fa-shopping-cart"> &nbsp Giỏ Hàng</a></div>
            </div>
        </div>
        <div class="container">
            <div class="card bg-light">
                <div class="container-fliud">
                    <div class="wrapper1 row">
                        <div class="col-md-6 preview col-md-6 .col-sm-12" style="padding-left: 30px;">
                            <div class="preview-pic tab-content">
                                <div class="tab-pane active" id="pic-1"><img src="../img/acer1.png" alt="">
                                </div>
                            </div>

                        </div>
                        <div class="details col-md-6 .col-sm-12">
                            <h3 class="product-title">AcerNitro5 Eagle AN515-57-53F9</h3>
                            <div class="rating">
                                <div class="stars"> <span class="fa fa-star checked"></span> <span
                                        class="fa fa-star checked"></span> <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span> <span class="fa fa-star"></span>
                                </div> <span class="review-no">680 Lượt Mua</span>
                            </div>
                            <h5>Thương Hiệu: MSI</h5>
                            <h4 style="font-weight: bold;">Giá Bán: 17.900.000đ</h4>
                            <form action="" method="Post">
                                <div class="action"> 
                                    <div class="action1">
                                        <a style="text-decoration: none;" href="#"><button class="add-to-cart btn1 btn-default"
                                            type="button">MUA
                                            NGAY</button></a> <a style="text-decoration: none;" href="#"><button class="like btn1 btn-default"
                                            type="button"><span>Thêm Vào Giỏ Hàng</span></button></a>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="wrapper row test">
                <div class="preview-img">
                    <div class="preview">

                        <h4 style="font-weight: bold;">Mô tả sản phẩm</h4>
                        <h5 style="font-weight: bold;">Laptop Gaming Quốc Dân Acer Nitro 16 Phoenix: VƯỢT QUA GIỚI HẠN
                            VỚI GPU NVIDIA GEFORCE RTX 4050</h5>
                        <h7>Laptop Gaming Quốc Dân là một thuật ngữ được sử dụng để chỉ những chiếc laptop chơi game có
                            cấu hình mạnh mẽ và thiết kế đẹp mắt, phù hợp với nhu cầu của người chơi game. Acer Nitro 16
                            Phoenix là một chiếc laptop chơi game ấn tượng với thiết kế cấu trúc gaming từ bên ngoài cho
                            đến vỏ hộp. Thiết kế này tạo nên một phong cách mạnh mẽ, độc đáo và tinh tế. Máy tính còn
                            được điểm xuyết bởi các viền neon tinh tế, tạo sự hòa hợp và thu hút mọi ánh nhìn đến từ góc
                            “setup” của game thủ.
                            Bạn mong chờ điều gì ở 1 chiếc Laptop Gaming ACER NITRO 16 PHOENIX? Cùng Phong Vũ điểm qua
                            những điểm nhấn đáng gờm bên trong chiếc laptop gaming quốc dân này nhé.</h7>
                    </div>
                    <div class="preview-pic1 tab-content">
                        <div class="tab-pane active" id="pic-2"><img src="../img/gioithieuacer.png" alt=""></div>
                    </div>

                    <div class="wrapper row">
                        <div class="preview">

                            <h4 style="font-weight: bold;">CARD ĐỒ HỌA RỜI CỰC KHỦNG MỚI NHẤT TỪ NVIDIA - Trang
                                bị GPU RTX™ 4050</h4>
                            <h7>
                                Với GPU GeForce RTX™ Series 40 mới nhất, Gaming Nitro 16 Phoenix đem đến sức
                                mạnh đồ họa vô cùng ấn tượng cho cả game thủ và những người sáng tạo. Card đồ
                                họa thế hệ mới này được phát triển dựa trên kiến trúc NVIDIA Ada Lovelace, tối
                                ưu hiệu suất và tiết kiệm năng lượng, mang đến sức mạnh đồ họa vượt trội so với
                                thế hệ trước.
                            </h7>

                            <div class="preview-pic1 tab-content">
                                <div class="tab-pane active" id="pic-1"><img src="../img/gioithieu2.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="wrapper row">
                        <div class="preview col-md-12">

                            <h4 style="font-weight: bold;">MÀN HÌNH 165HZ CHUẨN
                                GAMING</h4>
                            <h7>Màn hình rộng 16 inch với tỉ lệ 16:10 trên Gaming Nitro 16 Phoenix
                                được thiết kế đặc biệt cho gaming, với tấm nền IPS và độ phân giải
                                WUXGA (1920×1200). Tần số quét cao lên đến 165Hz cùng tính năng
                                NVIDIA Advanced Optimus đảm bảo trải nghiệm chơi game mượt mà và
                                không gặp gián đoạn hay hiện tượng bóng mờ. Điều đáng chú ý là màn
                                hình của Nitro 16 Phoenix còn có độ phủ màu 100% sRGB, một chỉ số
                                hiếm thấy trong dòng Laptop Gaming tầm trung từ 20 đến 40 triệu
                                đồng.</h7>

                            <div class="preview-pic1 tab-content">
                                <div class="tab-pane active" id="pic-1"><img src="../img/gioithieu2.png" alt=""></div>
                            </div>
                        </div>
                    </div>

                    <div class="wrapper row">
                        <div class="preview col-md-12">

                            <h4 style="font-weight: bold;">CHIẾN GAME
                                KHÔNG GIỚI HẠN VỚI CPU AMD RYZEN™ 7000 SERIES</h4>
                            <h7>Nitro 16 Phoenix 2023 sở hữu cấu hình chiến game cực
                                mạnh, cân mọi tựa game từ AAA đến game Esport. Điều này
                                được thực hiện nhờ sự trang bị của CPU AMD Ryzen™ 7000
                                Series mới nhất, đặc biệt là Ryzen™ 5 7535HS, là sự lựa
                                chọn hàng đầu cho những game thủ yêu thích "Đội Đỏ". Với
                                kiến trúc Zen 3+ và công nghệ 6nm, CPU này mang lại hiệu
                                suất ấn tượng với 6 nhân xử lý và 12 luồng, cùng với bộ
                                nhớ đệm lên đến 16MB. Điều này đảm bảo khả năng xử lý
                                nhanh chóng và mượt mà trong khi chơi game, đồng thời
                                tối ưu hóa hiệu suất và tiết kiệm năng lượng.</h7>

                            <div class="preview-pic1 tab-content">
                                <div class="tab-pane active" id="pic-1"><img src="../img/car.png" alt=""></div>
                            </div>
                        </div>
                    </div>

                    <div class="wrapper row">
                        <div class="preview col-md-12">

                            <h4 style="font-weight: bold;">
                                GIẢI PHÁP TẢN NHIỆT TIÊN TIẾN VỚI 2 QUẠT
                                SIÊU MÁT TRONG PHÂN KHÚC</h4>
                            <h7>Laptop Acer RTX 4050 được thiết kế với khung
                                máy được tối ưu và điều chỉnh đặc biệt để
                                nâng cao khả năng tản nhiệt, đây là một
                                trong những thành tựu mà Acer Predator tự
                                hào mang đến. Được trang bị 2 quạt tản
                                nhiệt, 2 cổng hút gió (trên và dưới) và 4
                                cổng thoát nhiệt, máy đạt đến một tầm cao
                                mới trong việc tản nhiệt hiệu quả.</h7>
                            <br>
                            <h7 style="font-weight: bold;">Laptop Acer RTX
                                4050 được thiết kế với khung máy được tối ưu
                                và điều chỉnh đặc biệt để nâng cao khả năng
                                tản nhiệt, đây là một trong những thành tựu
                                mà Acer Predator tự hào mang đến. Được trang
                                bị 2 quạt tản nhiệt, 2 cổng hút gió (trên và
                                dưới) và 4 cổng thoát nhiệt, máy đạt đến một
                                tầm cao mới trong việc tản nhiệt hiệu quả.
                            </h7>

                            <div class="preview-pic1 tab-content">
                                <div class="tab-pane active" id="pic-1"><img src="../img/tannhien.png" alt=""></div>
                            </div>
                        </div>
                    </div>

                    <div class="wrapper row">
                        <div class="preview col-md-12">

                            <h4 style="font-weight: bold;">
                                BÀN PHÍM LED RGB 4 VÙNG ĐẸP MẮT
                            </h4>
                            <h7>Tận hưởng chiến thắng cuối cùng
                                với bàn phím Led RGB 4 vùng,
                                mang đến hiệu ứng ánh sáng đa
                                dạng và tùy chỉnh, giúp bạn tạo
                                nên không gian chơi game độc đáo
                                trên Nitro 16 Phoenix. Quyền
                                kiểm soát toàn diện của máy
                                gaming này cũng nằm trong tay
                                bạn với phím tắt NitroSense, cho
                                phép bạn dễ dàng điều chỉnh các
                                thiết lập và tùy chỉnh hệ thống
                                theo ý muốn.</h7>
                            <br>
                            <h7 style="margin-top: 10px;">Đặc
                                biệt, các phím di chuyển "WASD"
                                và 4 phím mũi tên cũng được
                                thiết kế đặc biệt, nổi bật hơn
                                để dễ dàng thao tác trong những
                                tình huống quyết định và những
                                phản ứng nhanh chóng. Điều này
                                đảm bảo rằng bạn có sự thuận
                                tiện tối đa khi tham gia vào các
                                trận đấu gay cấn.</h7>

                            <div class="preview-pic1 tab-content">
                                <div class="tab-pane active" id="pic-1"><img src="../img/leb.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="wrapper row">
                        <div class="preview col-md-12">

                            <h4 style="font-weight: bold;">
                                NÂNG TẦM TRẢI NGHIỆM
                                ÂM THANH</h4>
                            <h7>Nitro 16 Phoenix đem
                                đến chất lượng âm
                                thanh tốt hơn, mang
                                lại lợi thế cạnh
                                tranh to lớn trong
                                các trận chiến với 2
                                loa 2W trang bị công
                                nghệ DTS:X® Ultra.
                            </h7>
                            <br>
                            <h7>
                                Đặc biệt, các phím
                                di chuyển "WASD" và
                                4 phím mũi tên cũng
                                được thiết kế đặc
                                biệt, nổi bật hơn để
                                dễ dàng thao tác
                                trong những tình
                                huống quyết định và
                                những phản ứng nhanh
                                chóng. Điều này đảm
                                bảo rằng bạn có sự
                                thuận tiện tối đa
                                khi tham gia vào các
                                trận đấu gay cấn.
                            </h7>

                            <div class="preview-pic1 tab-content">
                                <div class="tab-pane active" id="pic-1">
                                    <img src="../img/leb.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="wrapper row">
                        <div class="preview col-md-12">

                            <h4 style="font-weight: bold;">
                                ĐA DẠNG & ĐẦY ĐỦ CỔNG KẾT NỐI</h4>
                            <h7>Gaming Nitro 16 Phoenix phiên bản trang bị CPU AMD hỗ trợ tất cả thiết bị ngoại vi cần
                                thiết, nhờ sở hữu
                                đa dạng các cổng kết nối. Điều này bao gồm HDMI 2.1 để hỗ trợ chất lượng hình ảnh siêu
                                tốc và chuẩn USB
                                3.2 mới nhất (bao gồm cả Gen 1 và 2) để đảm bảo tốc độ truyền tải nhanh chóng.
                            </h7>
                            <br>

                            <div class="preview-pic1 tab-content">
                                <div class="tab-pane active" id="pic-1">
                                    <img src="../img/dadang.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="wrapper row">
                        <div class="preview col-md-12">

                            <h4 style="font-weight: bold;">
                                DỊCH VỤ BẢO HÀNH VIP 3S1
                            </h4>
                            <h7>
                                Khi mua sản phẩm tại Di Động Shop, bạn sẽ tiếp tục được tận hưởng chế độ bảo hành VIP
                                3S1 do Acer Việt
                                Nam cung cấp. Đây là một chính sách bảo hành nhanh dành riêng cho game thủ, đảm bảo rằng
                                bạn sẽ nhận
                                được sự chăm sóc tốt nhất cho sản phẩm của mình. Đặc biệt, các dòng sản phẩm Gaming như
                                Nitro 16 Phoenix
                                sẽ được kiểm tra, bảo hành và trả lại cho khách hàng chỉ trong thời gian ngắn: 03 ngày
                                (72 giờ), kể cả
                                vào các ngày thứ 7 và Chủ nhật. Nếu bất kỳ vấn đề nào không được giải quyết trong thời
                                gian bảo hành
                                này, bạn sẽ được đổi lấy một sản phẩm mới cùng loại hoặc tương đương (1 đổi 1). </h7>
                            <br>
                            <div class="preview-pic1 tab-content">
                                <div class="tab-pane active" id="pic-1"> <img src="../img/uudai.png" alt=""> </div>
                            </div>
                            <h7> Hơn nữa, khi mua sản phẩm này, bạn sẽ nhận được một bộ quà
                                tặng hấp dẫn trị
                                giá 7 triệu đồng gồm chuột, bàn phím và balo. Đây là những phụ kiện thiết yếu giúp bạn
                                trải nghiệm tốt
                                hơn và tận dụng tối đa khả năng chơi game của Nitro 16 Phoenix. Hãy truy cập ngay vào
                                website của Phong
                                Vũ hoặc ghé thăm showroom gần nhất để đặt mua sản phẩm độc quyền này và trải nghiệm sức
                                mạnh của Gaming
                                Nitro 16 Phoenix ngay hôm nay nhé
                            </h7>
                        </div>
                    </div>

                </div>

                
                <div class="thongso">
                    <table class="textthongso">
                        <tbody>
                            <tr>
                                <td>Thương hiệu</td>
                                <td>MSI</td>
                                
                              </tr>
                              <tr>
                                <td>Bảo hành</td>
                                <td>12 Tháng</td>
                              </tr>

                              <tr>
                                <td>Thông tin chung</td>
                                <td>665VN</td>
                              </tr>

                              <tr>
                                <td>Màu sắc</td>
                                <td>Đen</td>
                              </tr>

                              <tr>
                                <td>Nhu cầu</td>
                                <td>Gaming, Văn phòng, Đồ họa - Kỹ thuật</td>
                              </tr>

                              <tr>
                                <td>Cấu hình chi tiết</td>
                                <td>Core i5 , Intel Core thế hệ thứ 11</td>
                              </tr>
                              <tr>
                                <td>CPU</td>
                                <td>Intel Core i5-11400H</td>
                              </tr>
                              <tr>
                                <td>Chip đồ họa</td>
                                <td>GTX 1650 4GB GDDR6 / Intel UHD Graphics</td>
                              </tr>
                              <tr>
                                <td>RAM</td>
                                <td>1 x 8GB DDR4 2666MHz</td>
                              </tr>
                              <tr>
                                <td>Màn hình</td>
                                <td>( 1920 x 1080 ) Full HD IPS HD webcam</td>
                              </tr>
                              <tr>
                                <td>Lưu trữ</td>
                                <td>512GB SSD M.2 NVMe</td>
                              </tr>
                              <tr>
                                <td> Số cổng lưu trữ tối đa</td>
                                <td> M.2 NVMe</td>
                              </tr>
                              <tr>
                                <td> Cổng xuất hình</td>
                                <td> 1 x HDMI</td>
                              </tr>
                              <tr>
                                <td> Bàn phím</td>
                                <td>Thường , có phím số , RGB 4 vùng</td>
                              </tr>
                              <tr>
                                <td> Kích thước</td>
                                <td>360.1 x 279.9 x 25.9 - 27.9 mm</td>
                              </tr>
                        </tbody>
                        
                    </table>
                </div>
            </div>
        </div>


    </section>
       <!--fotter-->

       <footer class="footer">
        <div class="main">
            <div class="row">
                <div class="footer_col col-lg-2 col-sm-12">
                    <h4>Công Ty</h4>
                    <ul>
                        <li><a href="#">Về Chúng Tôi</a></li>
                        <li><a href="#">Dịch Vụ </a></li>
                        <li><a href="#">Chính Sách</a></li>
                        <li><a href="#">Chương Trình Giảm Giá</a></li>
                    </ul>
                </div>

                <div class="footer_col col-lg-3 col-sm-12" >
                    <h4>Thông Tin Liên Hệ
                    </h4>
                    <ul>
                        <li><a href="#">Địa Chỉ:68/3 Long Thới Nhà Bè</a></li>
                        <li><a href="#">Số điện thoại:0386950752</a></li>
                        <li><a href="#">Email:Toanb3074@gmail.com</a></li>

                    </ul>
                </div>

                <div class="footer_col col-lg-3 col-sm-12">
                    <h4>Chính Sách Mua Hàng</h4>
                    <ul>
                        <li><a href="#">Chính Sách Bảo Hành</a></li>
                        <li><a href="#">Chính sách đổi trả</a></li>
                        <li><a href="#">Chính Sách Tranh Toán</a></li>

                    </ul>
                </div>
                <div class="footer_col col-lg-2 col-sm-12">
                    <h4>Hỗ Trợ Khách Hàng</h4>
                    <ul>
                        <li><a href="#">Thẻ Ưu Đãi</a></li>
                        <li><a href="#">Hướng Dẫn Mua Online</a></li>
                        <li><a href="#">Chính Sách Trả Góp</a></li>

                    </ul>
                </div>

                <div class="footer_col col-lg-2 col-sm-12">
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