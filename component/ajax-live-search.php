<?php
    require_once "../db/connect.php";
 
    if (isset($_POST['query'])) {
        $query = "SELECT * FROM san_pham WHERE ten_san LIKE '%{$_POST['query']}%' LIMIT 4";
        $result = mysqli_query($connect, $query);

        if (mysqli_num_rows($result) > 0) {
            while ($res = mysqli_fetch_array($result)) {
            echo
                '<ul class="shopping-item" style="padding:20px">
                <li>
                <a style="display: flex;" href="product-details.php?id='.$res['id'].'">
                    <div style="width: 100px;margin-right: 20px;">
                        <img src="' . $res['anh'] . '" style="width=100%" alt="">
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
                            text-align: justify;">' . $res['ten_san'] . '</p>
                            <p style="color: #74140d;text-align: justify;">' . $res['gia'] . ' đ</p>
                    </div>
                    </a>
                    <hr>
                </li>
                </ul>
            ';   
            }

        } else {
            echo "<div class='alert alert-danger mt-3 text-center' role='alert'>Không tìm thấy sản phẩm</div>";
        }
    }

?>