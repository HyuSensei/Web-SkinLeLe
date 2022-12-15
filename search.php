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
    .col-sm-4 a img:hover {
        opacity: 0.6;
    }
</style>

<body>
    <?php include 'component/header_2.php' ?>


    <div class="container" style="margin-bottom: 30px;">
    <p style="font-size: 25px;font-weight: bold;font-family: 'Times New Roman', Times, serif;color: #c05353;margin-bottom: 20px;text-align: center;">SẢN PHẨM CẦN TÌM</p>
        <?php
        require_once "./db/config.php";
        if (isset($_GET['live_search'])) {
            $filtervalues = $_GET['live_search'];
            $query = "SELECT * FROM san_pham WHERE CONCAT(id,ten_san,mo_ta,gia) LIKE '%$filtervalues%' ";
            $query_run = mysqli_query($link, $query);

            if (mysqli_num_rows($query_run) > 0) {
                foreach ($query_run as $items) {
        ?>


                    <div class="col-xs-6 col-sm-3">
                        <div class="single-product">
                            <div class="product-img">
                                <a href="product-details.php?id=<?= $items['id']; ?>">
                                    <img class="default-img" src="<?= $items['anh']; ?>" alt="#">
                                    <img class="hover-img" src="<?= $items['anh']; ?>" alt="#">
                                </a>
                                <?php if (!empty($_SESSION['id'])) { ?>
                                    <div class="button-head">
                                        <div style="width: 100%; height: 48px;" class="product-action-2">
                                            <a style="width: 100%;" href="component/add_to_cart.php?id=<?= $items['id']; ?>"><button style="background-color: #5a90e5;width: 100%;" type="button" class="btn btn-primary">Thêm vào giỏ hàng</button></a>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                            <div class="product-content">
                                <h3><a href="product-details.php" style="display: -webkit-box;
                            max-height: 3.2rem;
                           -webkit-box-orient: vertical;
                            overflow: hidden;
                            text-overflow: ellipsis;
                            white-space: normal;
                            -webkit-line-clamp: 2;
                            line-height: 1.6rem;
                            margin-top: 10px;"><?= $items['ten_san']; ?></a></h3>
                                <p style="display: -webkit-box;
                            max-height: 3.2rem;
                           -webkit-box-orient: vertical;
                            overflow: hidden;
                            text-overflow: ellipsis;
                            white-space: normal;
                            -webkit-line-clamp: 1;
                            line-height: 1.6rem;
                            margin-top: 10px;"><?= $items['mo_ta']; ?></p>
                                <div class="product-price">
                                    <span style="color: #74140d;font-weight: bold;font-size: 18px;"><?= $items['gia']; ?> đ</span>
                                </div>
                            </div>
                        </div>
                    </div>


                <?php
                }
            } else {
                ?>
                <p style="text-align: center;font-size: 20px;font-weight: bold;color: #8f212b;margin: 20px;">Không tìm thấy sản phẩm</p>
        <?php
            }
        }
        ?>


    </div>



    <?php
    include 'component/footer.php'
    ?>
    <?php include('jquery.php') ?>
</body>

</html>