<?php
require_once('./db/connect.php');
$sql1 = "select * from san_pham where danh_muc=N'topsale' and id >=13 and id<=16 ";
$result1 = mysqli_query($connect, $sql1);
?>
<?php foreach ($result1 as $value) : ?>
    <div class="col-xl-3 col-lg-4 col-md-4 col-12">
        <div class="single-product">
            <div class="product-img">
                <a href="product-details.php?id=<?php echo $value['id'] ?>">
                    <img class="default-img" src="<?php echo $value['anh'] ?>" alt="#">
                    <img class="hover-img" src="<?php echo $value['anh'] ?>" alt="#">
                </a>
                
               
                    <div data-id="<?php echo $value['id'] ?>" class="button-head">
                        <div style="width: 100%; height: 48px;" class="product-action-2">
                        <a style="width: 100%;" href=""> <button style="background-color: #8f212b;width: 100%;" type="button" class="btn btn-primary" ><i class="fa-solid fa-cart-shopping"></i> Thêm vào giỏ hàng</button></a>
                        </div>
                    </div>
                
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
                            margin-top: 10px;"><?php echo $value['ten_san'] ?></a></h3>
                <p style="display: -webkit-box;
                            max-height: 3.2rem;
                           -webkit-box-orient: vertical;
                            overflow: hidden;
                            text-overflow: ellipsis;
                            white-space: normal;
                            -webkit-line-clamp: 1;
                            line-height: 1.6rem;
                            margin-top: 10px;"><?php echo $value['mo_ta'] ?></p>
                <div class="product-price">
                    <span style="color: gray;text-decoration: line-through;"><?php echo $value['gia'] ?> đ</span>
                </div>
                <p style="color:#820813;font-weight: bold;font-size: 18px;"><?php echo $value['khuyen_mai'] ?> đ</p>
            </div>
        </div>
    </div>
<?php endforeach ?>
