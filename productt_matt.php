<!DOCTYPE html>
<html lang="en">

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
    #sidebar {
        float: left;
        background: #fff;
        padding: 13px 0 0 45px;
        height: 1400px;
        border-right: 2px solid #eee;
    }

    li a:hover {
        font-weight: bold;
    }
</style>

<body>
    <?php include 'component/header_2.php' ?>
    <!-- Start Product Area -->
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <div id="sidebar" style="width: 100%;">
                    <h2 style="font-family: 'Times New Roman', Times, serif;">DANH MỤC</h2>
                    <div>
                        <ul style="margin-top: 20px;">
                        <li><a style="font-weight: bold;" href="product_1.php">Chăm Sóc Da</a>
                                <ul style="margin-top: 15px;">
                                    <li style="margin-top: 15px;"><a href="productt_giaiphaplanda.php">Giải Pháp Làn Da</a></li>
                                    <li style="margin-top: 15px;"><a href="productt_chamsoccothe.php">Chăm Sóc Cơ Thể</a></li>
                                    <li style="margin-top: 15px;"><a href="productt_quytrinhduongda.php">Quy Trình Dưỡng Da</a></li>
                                    <li style="margin-top: 15px;"><a href="productt_lamdep.php">Làm Đẹp</a></li>
                                </ul>
                            </li>
                            <li style="margin-top: 15px;"><a style="font-weight: bold;" href="product_2.php"><span></span>Trang Điểm</a>
                                <ul>
                                    <li style="margin-top: 15px;"><a href="productt_mat.php">Mắt</a></li>
                                    <li style="margin-top: 15px;"><a style="font-weight: bold;" href="productt_matt.php">Mặt</a></li>
                                    <li style="margin-top: 15px;"><a href="productt_moi.php">Môi</a></li>

                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="container" style="margin-top: 30px;">
                        <p style="margin-left: 43px;
                                margin-bottom: 10px;">GIÁ</p>
                        <form method="POST" action="./component/product_chamsocda.php" style="width: 70%;margin: auto;">
                            <div class="form-group" style="display:flex;justify-content: space-between;width: 100%;">
                                <input type="text" class="form-control" placeholder="Nhập giá" name="start" style="width:80px;height: 40px;font-size: 13px;">
                                <div style="font-size: 18px;font-weight: bold;">-</div>
                                <input type="text" class="form-control" placeholder="Nhập giá" name="end" style="width:80px;height: 40px;font-size: 13px;">
                            </div>
                            <button type="submit" class="btn btn-default" style="width: 100%;">áp dụng</button>
                        </form>
                    </div>
                    <img style="margin-top: 20px;" src="https://theme.hstatic.net/1000006063/1000748098/14/home_brandlist_item_1_banner_d_1024x1024.jpg?v=10908" alt="" width="100%">
                </div>
            </div>
            <div class="col-sm-8">
            <img src="./images/bannerdanhmuc.webp" alt="" width="100%">
                <div class="product-area section" style="margin-top: -70px;">
                    <div class="container">
                        <p style="font-size: 25px;font-weight: bold;font-family: 'Times New Roman', Times, serif;color: #c05353;margin-bottom: 20px;">MẶT</p>
                        <div class="row" style="margin-top: -30px;">
                            <div class="col-12">
                                <div class="product-info">
                                    <div class="tab-content" id="myTabContent">
                                        <div class="tab-pane fade show active" id="man" role="tabpanel">
                                            <div class="tab-single">
                                                <div class="row">
                                                    <?php include('./component/product_matt.php') ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <ul class="pagination" style="display: flex;justify-content: center;margin-top: -50px">
                        <?php for ($i = 1; $i <= $so_trang; $i++) { ?>
                            <li style="height: 20px;">
                                <a href="?trang=<?php echo $i ?>">
                                    <?php echo $i ?>
                                </a>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>

</body>
<?php
include 'component/footer.php'
?>

</html>
<?php include('jquery.php') ?>