<?php
session_start();
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
                        <h4>value Add
                            <a href="../productTable.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form class="form" action="code.php" method="POST">

                            <div class="mb-3">
                                <label>ten_san</label>
                                <input type="text" name="ten_san" class="form-control" data-rule-required="true" data-rule-minlength="6" data-msg-required="Please enter ten san pham.">
                            </div>
                            <div class="mb-3">
                                <label>mo_ta</label>
                                <input type="text" name="mo_ta" class="form-control" data-rule-required="true" data-msg-required="Please enter mo ta.">
                            </div>
                            <div class="mb-3">
                                <label>anh</label>
                                <input type="text" name="anh" class="form-control" data-rule-required="true" data-msg-required="Please enter anh.">
                            </div>
                            <div class="mb-3">
                                <label>gia</label>
                                <input type="text" name="gia" class="form-control" data-rule-required="true" data-rule-minlength="5" data-msg-required="Please enter gia.">
                            </div>
                            <div class="mb-3">
                                <label>khuyen_mai</label>
                                <input type="text" name="khuyen_mai" class="form-control" data-rule-required="true" data-rule-minlength="5" data-msg-required="Please enter khuyen mai.">
                            </div>
                            <div class="mb-3">
                                <label>danh_muc</label>
                                <input type="text" name="danh_muc" class="form-control" data-rule-required="true" data-rule-minlength="3" data-msg-required="Please enter danh muc.">
                            </div>
                            <div class="mb-3">
                                <button type="submit" name="save" class="btn btn-primary">Save value</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <?php include('../jquery_from.php') ?>
</body>

</html>