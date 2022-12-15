<?php
session_start();
require '../db/connect.php';
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title></title>
</head>

<body>

    <div class="container mt-5">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Student Edit
                            <a href="../tableVnpay.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <?php
                        if (isset($_GET['id_vnpay'])) {
                            $id_vnpay = mysqli_real_escape_string($connect, $_GET['id_vnpay']);
                            $query = "SELECT * FROM vn_pay WHERE id_vnpay='$id_vnpay' ";
                            $query_run = mysqli_query($connect, $query);

                            if (mysqli_num_rows($query_run) > 0) {
                                $value = mysqli_fetch_array($query_run);
                        ?>
                                <form action="code.php" method="POST">
                                    <input type="hidden" name="id_vnpay" value="<?= $value['id_vnpay']; ?>">

                                    <div class="mb-3">
                                        <label> code_cart</label>
                                        <input type="text" name="code_cart" value="<?= $value['code_cart']; ?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label> vnp_amount</label>
                                        <input type="text" name="vnp_amount" value="<?= $value['vnp_amount']; ?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label> vnp_bankcode</label>
                                        <input type="text" name="vnp_bankcode" value="<?= $value['vnp_bankcode']; ?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label> vnp_banktranno</label>
                                        <input type="text" name="vnp_banktranno" value="<?= $value['vnp_banktranno']; ?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label> vnp_cardtype</label>
                                        <input type="text" name="vnp_cardtype" value="<?= $value['vnp_cardtype']; ?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label> vnp_orderinfo</label>
                                        <input type="text" name="vnp_orderinfo" value="<?= $value['vnp_orderinfo']; ?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label> vnp_paydate</label>
                                        <input type="text" name="vnp_paydate" value="<?= $value['vnp_paydate']; ?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label> vnp_tmncode</label>
                                        <input type="text" name="vnp_tmncode" value="<?= $value['vnp_tmncode']; ?>" class="form-control">
                                    </div>

                                    <div class="mb-3">
                                        <label> vnp_transactionno</label>
                                        <input type="text" name="vnp_transactionno" value="<?= $value['vnp_transactionno']; ?>" class="form-control">
                                    </div>

                                    <div class="mb-3">
                                        <button type="submit" name="update" class="btn btn-primary">
                                            Update Student
                                        </button>
                                    </div>

                                </form>
                        <?php
                            } else {
                                echo "<h4>No Such Id Found</h4>";
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>