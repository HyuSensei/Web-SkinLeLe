<!DOCTYPE html>
<html lang="zxx">

<head>
    <!-- Meta Tag -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name='copyright' content=''>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Title Tag  -->
    <title>SKINLELE.COM</title>
    <?php include('css-libary.php') ?>
</head>

<body class="js">
    <?php include 'component/header_2.php'; ?>
    <?php
    $cart = "";
    $total = 0;
    if (isset($_SESSION['cart'])) {
        $cart = $_SESSION['cart'];
    }
    ?>
    <!-- Breadcrumbs -->
    <div class="breadcrumbs">
        <div class="container">
            <div class="row" style="margin-bottom: 20px;">
                <div class="col-12">
                    <div class="bread-inner">
                        <ul class="bread-list">
                            <li><a href="index.php">Home<i class="ti-arrow-right"></i></a></li>
                            <li class="active"><a href="blog-single.php">Cart</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Ảnh</th>
                            <th>Tên Sản Phẩm</th>
                            <th>Giá</th>
                            <th>Số Lượng</th>
                            <th>Tổng Tiền</th>
                            <th>Xóa</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php if (is_array($cart) || is_object($cart)) foreach ($cart as $id => $each) : ?>
                            <tr>
                                <td><img src="<?php echo $each['anh'] ?>" alt="" style="width: 130px;"></td>
                                <td>
                                    <p><?php echo $each['ten_san'] ?></p>
                                </td>
                                <td>
                                       <p style="color: #820813;"><?php echo $each['gia'] ?>đ</p>
                                </td>
                                <td>
                                    <a href="update_quantity_in_cart.php?id=<?php echo $id ?>&type=giam">
                                        -
                                    </a>
                                    <?php echo $each['so_luong'] ?>
                                    <a href="update_quantity_in_cart.php?id=<?php echo $id ?>&type=tang">
                                        +
                                    </a>
                                </td>
                                <td>
                                        <p style="color: #820813;">
                                        <?php
                                        $sum = $each['gia'] * $each['so_luong'];
                                        $total += $sum;
                                        echo $sum.'đ';
                                        ?>
                                        </p>
                                </td>
                                <td>
                                    <a href="delete_cart.php?id=<?php echo $id ?>">
                                        X
                                    </a>
                                </td>
                            </tr>
                          
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
            <h1 style="margin-top: 20px;font-family: 'Times New Roman', Times, serif;">
                Tổng tiền:
                    <?php echo $total ?>
                đ
            </h1>
            <br>
        </div>
    </div>
    <!-- Start Shop Services Area  -->
    <section class="shop-services section" style="margin-bottom: 100px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Start Single Service -->
                    <div class="single-service">
                        <i class="ti-rocket"></i>
                        <h4>MIỄN PHÍ VẬN CHUYỂN</h4>
                        <p>Đơn hàng trên 300000</p>
                    </div>
                    <!-- End Single Service -->
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Start Single Service -->
                    <div class="single-service">
                        <i class="ti-reload"></i>
                        <h4>TRẢ LẠI MIỄN PHÍ</h4>
                        <p>Trong vòng 30 ngày trở lại</p>
                    </div>
                    <!-- End Single Service -->
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Start Single Service -->
                    <div class="single-service">
                        <i class="ti-lock"></i>
                        <h4>THANH TOÁN CHẮC CHẮN</h4>
                        <p>Thanh toán an toàn 100%</p>
                    </div>
                    <!-- End Single Service -->
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Start Single Service -->
                    <div class="single-service">
                        <i class="ti-tag"></i>
                        <h4>SẢN PHẨM TỐT NHẤT</h4>
                        <p>Đảm bảo giá</p>
                    </div>
                    <!-- End Single Service -->
                </div>
            </div>
        </div>
    </section>
    <div>
        <?php
        include 'component/footer.php'
        ?>
    </div>

    <!-- End Shop Newsletter -->
    <?php include('jquery.php') ?>
</body>

</html>