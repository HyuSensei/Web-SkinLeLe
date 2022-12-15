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
                        <h4>
                            <a href="../tableSign.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form class="form" action="code.php" method="POST">

                            <div class="mb-3">
                                <label>name</label>
                                <input type="text" name="name" class="form-control" data-rule-required="true" data-rule-minlength="6" data-msg-required="Please enter name.">
                            </div>
                            <div class="mb-3">
                                <label>email</label>
                                <input type="email" name="email" class="form-control" data-rule-email="true" data-msg-email="Please enter email.">
                            </div>
                            <div class="mb-3">
                                <label>phone_number</label>
                                <input type="text" name="phone_number" class="form-control" data-rule-required="true" data-rule-minlength="10" data-msg-required="Please enter phone.">
                            </div>
                            <div class="mb-3">
                                <label>address</label>
                                <input type="text" name="address" class="form-control" data-rule-required="true" data-rule-minlength="6" data-msg-required="Please enter address.">
                            </div>
                            <div class="mb-3">
                                <label>password</label>
                                <input type="text" name="password" class="form-control" data-rule-required="true" data-rule-minlength="3" data-msg-required="Please enter password.">
                            </div>
                            <div class="mb-3">
                                <label>token</label>
                                <input type="text" name="token" class="form-control">
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

    <?php include('../jquery_from.php') ?>
</body>

</html>