<?php
    require_once "../db/connect.php";
 
    if (isset($_POST['query'])) {
        $query = "SELECT * FROM san_pham WHERE ten_san LIKE '%{$_POST['query']}%' LIMIT 4";
        $result = mysqli_query($connect, $query);

        if (mysqli_num_rows($result) > 0) {
            while ($res = mysqli_fetch_array($result)) {
            echo   '<ul class="shopping-list" style="padding:20px">
                <li style="display: flex;">
                    <div style="width: 100px;margin-right: 20px;">
                        <img src="'.$res['anh'].'" width="150px" alt="">
                    </div>
                    <div>
                        <p style="display: -webkit-box;
                            max-height: 3.2rem;
                        -webkit-box-orient: vertical;
                            overflow: hidden;
                            text-overflow: ellipsis;
                            white-space: normal;
                            -webkit-line-clamp: 2;
                            line-height: 1.6rem;
                            margin-top: 10px;
                            font-size: 12px;
                            text-align: justify;">'.$res['ten_san'].'</p>
                            <p style="color: #74140d;text-align: justify;">'.$res['gia'].' đ</p>
                    </div>
                </li>
            </ul>';    
            //     echo '<img src="'.$res['anh'].'" alt="" style="width: 200px">';
            //     echo  '<p style="display: -webkit-box;
            //     max-height: 3.2rem;
            //    -webkit-box-orient: vertical;
            //     overflow: hidden;
            //     text-overflow: ellipsis;
            //     white-space: normal;
            //     -webkit-line-clamp: 1;
            //     line-height: 1.6rem;
            //     margin-top: 10px;">'.$res['ten_san'].'</p>';
            //     echo  '<p style="color:#820813;font-weight: bold;font-size: 18px;margin-bottom:10px">'.$res['gia'].' đ</p>';
            }

        } else {
            echo "<div class='alert alert-danger mt-3 text-center' role='alert'>Không tìm thấy sản phẩm</div>";
        }
    }

?>