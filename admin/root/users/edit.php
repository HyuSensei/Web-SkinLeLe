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
                        <h4>value Edit
                            <a href="../tableSign.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <?php
                        if (isset($_GET['id'])) {
                            $id = mysqli_real_escape_string($connect, $_GET['id']);
                            $query = "SELECT * FROM users WHERE id='$id' ";
                            $query_run = mysqli_query($connect, $query);

                            if (mysqli_num_rows($query_run) > 0) {
                                $value = mysqli_fetch_array($query_run);
                        ?>
                                <form action="code.php" method="POST">
                                    <input type="hidden" name="id" value="<?= $value['id']; ?>">

                                    <div class="mb-3">
                                        <label> name</label>
                                        <input type="text" name="name" value="<?= $value['name']; ?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label> email</label>
                                        <input type="email" name="email" value="<?= $value['email']; ?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label> phone_number</label>
                                        <input type="text" name="phone_number" value="<?= $value['phone_number']; ?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label> address</label>
                                        <input type="text" name="address" value="<?= $value['address']; ?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label> password</label>
                                        <input type="text" name="password" value="<?= $value['password']; ?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label> token</label>
                                        <input type="text" name="token" value="<?= $value['token']; ?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <button type="submit" name="update" class="btn btn-primary">
                                            Update value
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