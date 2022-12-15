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
                            <a href="../tableOrders.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <?php
                        if (isset($_GET['id'])) {
                            $id = mysqli_real_escape_string($connect, $_GET['id']);
                            $query = "SELECT * FROM orders WHERE id='$id' ";
                            $query_run = mysqli_query($connect, $query);

                            if (mysqli_num_rows($query_run) > 0) {
                                $student = mysqli_fetch_array($query_run);
                        ?>
                                <form action="code.php" method="POST">
                                    <input type="hidden" name="id" value="<?= $student['id']; ?>">

                                    <div class="mb-3">
                                        <label> customer_id</label>
                                        <input type="text" name="customer_id" value="<?= $student['customer_id']; ?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label> name_receiver</label>
                                        <input type="text" name="name_receiver" value="<?= $student['name_receiver']; ?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label> phone_receiver</label>
                                        <input type="text" name="phone_receiver" value="<?= $student['phone_receiver']; ?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label> address_receiver</label>
                                        <input type="text" name="address_receiver" value="<?= $student['address_receiver']; ?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label> total_price</label>
                                        <input type="text" name="total_price" value="<?= $student['total_price']; ?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label> status</label>
                                        <input type="text" name="status" value="<?= $student['status']; ?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label> created_at</label>
                                        <input type="text" name="created_at" value="<?= $student['created_at']; ?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label> cart_payment</label>
                                        <input type="text" name="cart_payment" value="<?= $student['cart_payment']; ?>" class="form-control">
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