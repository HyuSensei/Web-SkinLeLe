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
    <title>shoplele.site</title>
    <?php include('css-libary.php') ?>
</head>
<style>
    .container a p:hover {
        color: #8f212b;
        font-weight: bold;
    }
</style>

<body class="js" style="background-color: #eaeff6;">
    <?php include 'component/header_2.php'; ?>
    <div class="container" style="height: auto;margin-bottom: 300px;">
        <div class="row" style="height: 100%;">
            <div style="background-color: white;" class="col-sm-3">
                <div class="row" style="margin-top: 20px;">
                    <div class="col-sm-4">
                        <i style="font-size: 50px;" class="fa-solid fa-user"></i>
                    </div>
                    <div class="col-sm-8" style="margin-left: -45px;">
                        <?php if (isset($_SESSION['id'])) {  ?>
                            <p><?php echo $_SESSION['name'] ?></p>
                            <p><?php echo $_SESSION['email'] ?></p>
                        <?php } ?>
                    </div>
                </div>
                <hr>
                <div class="container" style="margin-top: 20px;border-top: 2px;">
                    <a href="user.php">
                        <p><i class="fa-solid fa-user"></i> Thông Tin</p>
                    </a>
                    <br>
                    <a href="user_order.php">
                        <p style="font-weight: bold;"><i class="fa-sharp fa-solid fa-bag-shopping"></i> Quản Lý Đơn Hàng</p>
                    </a>
                    <br>
                    <a href="view_cart.php">
                        <p><i class="fa-solid fa-cart-shopping"></i> Giỏ Hàng</p>
                    </a>
                    <br>
                    <a href="logout.php">
                        <p><i class="fa-solid fa-right-from-bracket"></i> Đăng Xuất</p>
                    </a>
                </div>
            </div>
            <div style="background-color: white;" class="col-sm-9">
                <div style="margin-left: 50px;">
                    <p style="margin-top: 20px;font-size:20px;color: black;font-weight: bold;">Quản lý đơn hàng</p>
                    <div class="container" style="display: flex;justify-content: space-between;margin-top: 20px;">
                        <div><a href="user_order.php">
                                <p style="font-weight: bold;color: #8f212b;">Chờ xác nhận</p>
                            </a></div>
                        <div><a href="">
                                <p>Chờ lấy hàng</p>
                            </a></div>
                        <div><a href="">
                                <p>Đang giao</p>
                            </a></div>
                        <div><a href="">
                                <p>Đã giao</p>
                            </a></div>
                        <div><a href="">
                                <p>Đã hủy</p>
                            </a></div>
                    </div>
                </div>
                <div class="container" style="margin-top: 20px;margin-left: 10px;">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Mã đơn hàng</th>
                                    <th>Ảnh</th>
                                    <th>Tên Sản Phẩm</th>
                                    <th>Số Lượng</th>
                                    <th>Thành Tiền</th>
                                    <th>Người Nhận</th>
                                    <th>Số Điện thoại</th>
                                    <th>Địa Chỉ</th>
                                    <th>Phương Thức Thanh Toán</th>
                                    <th>Ngày Đặt</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php require_once('component/get_order.php') ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include('./component/footer.php') ?>
    <!-- /End Footer Area -->
    <?php include('jquery.php') ?>
</body>

</html>