<?php
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

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Student View Details
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

                                <div class="mb-3">
                                    <label>id_vnpay</label>
                                    <p class="form-control">
                                        <?= $value['id_vnpay']; ?>
                                    </p>
                                </div>
                                <div class="mb-3">
                                    <label> code_cart</label>
                                    <p class="form-control">
                                        <?= $value['code_cart']; ?>
                                    </p>
                                </div>
                                <div class="mb-3">
                                    <label> vnp_amount</label>
                                    <p class="form-control">
                                        <?= $value['vnp_amount']; ?>
                                    </p>
                                </div>
                                <div class="mb-3">
                                    <label>vnp_bankcode </label>
                                    <p class="form-control">
                                        <?= $value['vnp_bankcode']; ?>
                                    </p>
                                </div>
                                <div class="mb-3">
                                    <label> vnp_banktranno</label>
                                    <p class="form-control">
                                        <?= $value['vnp_banktranno']; ?>
                                    </p>
                                </div>
                                <div class="mb-3">
                                    <label> vnp_cardtype</label>
                                    <p class="form-control">
                                        <?= $value['vnp_cardtype']; ?>
                                    </p>
                                </div>
                                <div class="mb-3">
                                    <label> vnp_orderinfo</label>
                                    <p class="form-control">
                                        <?= $value['vnp_orderinfo']; ?>
                                    </p>
                                </div>
                                <div class="mb-3">
                                    <label> vnp_paydate</label>
                                    <p class="form-control">
                                        <?= $value['vnp_paydate']; ?>
                                    </p>
                                </div>
                                <div class="mb-3">
                                    <label> vnp_tmncode</label>
                                    <p class="form-control">
                                        <?= $value['vnp_tmncode']; ?>
                                    </p>
                                </div>
                                <div class="mb-3">
                                    <label> vnp_transactionno</label>
                                    <p class="form-control">
                                        <?= $value['vnp_transactionno']; ?>
                                    </p>
                                </div>

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