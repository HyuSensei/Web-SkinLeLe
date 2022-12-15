<?php
 require_once('db/connect.php');
    $customer_id = "";
    if(isset($_SESSION['id'])){
        $customer_id = $_SESSION['id'];
    }
    $sql = "select *from orders, order_product,san_pham where orders.id=order_product.order_id and san_pham.id=order_product.product_id and customer_id='$customer_id'";
    $result = mysqli_query($connect, $sql);
    $number_row = mysqli_num_rows($result);
if ($number_row > 0) {
    while ($each = mysqli_fetch_array($result)) {
        echo '<tr>
                    <td>
                        <p>'.$each['order_id'].'</p>
                    </td>
                    <td><img src="'.$each['anh'].'" alt="" style="width: 100%;"></td>
                    <td>
                        <p style="display: -webkit-box;
                        max-height: 3.2rem;
                       -webkit-box-orient: vertical;
                        overflow: hidden;
                        text-overflow: ellipsis;
                        white-space: normal;
                        -webkit-line-clamp: 2;
                        line-height: 1.6rem;">'.$each['ten_san'].'</p>
                    </td>
                    <td>
                        <p>'.$each['quantity'].'</p>
                    </td>
                    <td>
                        <p>'.$each['total_price'].'</p>
                    </td>
                    <td>
                        <p>'.$each['name_receiver'].'</p>
                    </td>
                    <td>
                        <p>'.$each['phone_receiver'].'</p>
                    </td>
                    <td>
                        <p>'.$each['address_receiver'].'</p>
                    </td>
                    <td>
                        <p>'.$each['cart_payment'].'</p>
                    </td>
                    <td>
                        <p>'.$each['created_at'].'</p>
                    </td>   
            </tr>';
    }
}
