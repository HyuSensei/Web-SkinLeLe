<?php
require_once('./db/connect.php');
$sql = "select * from vn_pay";
$result = mysqli_query($connect, $sql);
?>
<!-- <a href="../../../admin/root/orders/create_order.php" style="float: right; background-color: #e28585;" class="btn btn-success pull-right"><i class="fa fa-plus"></i> Add New Product</a> -->
<div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
                <th>id_vnpay </th>
                <th>code_cart</th>
                <th>vnp_amount</th>
                <th>vnp_bankcode</th>
                <th>vnp_banktranno</th>
                <th>vnp_cardtype</th>
                <th>vnp_orderinfo</th>
                <th>vnp_paydate</th>
                <th>vnp_tmncode</th>
                <th>vnp_transactionno</th>
                <th>Xem</th>
                <th>Sửa</th>
                <th>Xóa</th>
            </tr>
        </thead>
        <tbody>
            <?php if (is_array($result) || is_object($result)) foreach ($result as $value) : ?>
                <tr>

                    <td>
                        <p><?php echo $value['id_vnpay'] ?></p>
                    </td>
                    <td>
                        <p><?php echo $value['code_cart'] ?></p>
                    </td>
                    <td><?php echo $value['vnp_amount'] ?></td>
                    <td>
                        <p><?php echo $value['vnp_bankcode'] ?></p>
                    </td>
                    <td>
                        <p><?php echo $value['vnp_banktranno'] ?></p>
                    </td>
                    <td>
                        <p><?php echo $value['vnp_cardtype'] ?></p>
                    </td>
                    <td>
                        <p><?php echo $value['vnp_orderinfo'] ?></p>
                    </td>
                    <td>
                        <p><?php echo $value['vnp_paydate'] ?></p>
                    </td>
                    <td>
                        <p><?php echo $value['vnp_tmncode'] ?></p>
                    </td>
                    <td>
                        <p><?php echo $value['vnp_transactionno'] ?></p>
                    </td>
                    <td>
                        <a href="./vnpay/view.php?id_vnpay=<?php echo $value['id_vnpay'] ?>"><span class="fa fa-eye" style="color: #e28585;"></span></a>
                    </td>
                    <td>
                        <a href="./vnpay/edit.php?id_vnpay=<?php echo $value['id_vnpay'] ?>"><span class="fa fa-pencil" style="color: #e28585;"></a>
                    </td>
                    <td>
                        <form action="./orders/code.php" method="POST" class="d-inline">
                            <button type="submit" name="delete" value="<?php echo $value['id_vnpay'] ?>" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>