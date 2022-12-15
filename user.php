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
    <div class="container" style="height: 90%;margin-bottom: 100px;">
        <div class="row" style="height: 100%;">
            <div style="background-color: white;" class="col-sm-3">
                <div class="container">
                    <div class="row" style="margin-top: 20px;">
                        <div class="col-sm-4">
                            <i style="font-size: 50px;" class="fa-solid fa-user"></i>
                        </div>
                        <div class="col-sm-8" style="margin-left: -45px;">
                            <?php if (isset($_SESSION['id'])) {  ?>
                                <div class="container">
                                    <p><?php echo $_SESSION['name'] ?></p>
                                    <p><?php echo $_SESSION['email'] ?></p>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="container" style="margin-top: 20px;border-top: 2px;">
                    <a href="user.php">
                        <p style="font-weight: bold;"><i class="fa-solid fa-user"></i> Thông Tin</p>
                    </a>
                    <br>
                    <a href="user_order.php">
                        <p><i class="fa-sharp fa-solid fa-bag-shopping"></i> Quản Lý Đơn Hàng</p>
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
                <div style="margin-left: 100px;">
                    <p style="margin-top: 20px;font-size:20px;color: black;font-weight: bold;">Thông tin tài khoản</p>
                    <?php if (isset($_SESSION['id'])) {  ?>
                        <p style="margin-top: 20px;">Họ và tên: <span style="margin-left: 100px;"><?php echo $_SESSION['name'] ?></span></p>
                        <p style="margin-top: 20px;">Email: <span style="margin-left: 125px;"><?php echo $_SESSION['email'] ?></span></p>
                        <p style="margin-top: 20px;">Số điện thoại: <span style="margin-left: 75px;"><?php echo $_SESSION['phone_number'] ?></span></p>
                        <p style="margin-top: 20px;">Địa chỉ: <span style="margin-left: 118px;"><?php echo $_SESSION['address'] ?></span></p>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
    <?php include('./component/footer.php') ?>
    <!-- /End Footer Area -->
    <?php include('jquery.php') ?>
</body>

</html>