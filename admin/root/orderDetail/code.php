<?php
session_start();
require '../db/connect.php';

if (isset($_POST['delete'])) {
    $order_id = mysqli_real_escape_string($connect, $_POST['delete']);

    $query = "DELETE FROM order_product WHERE order_id='$order_id' ";
    $query_run = mysqli_query($connect, $query);

    if ($query_run) {
        $_SESSION['message'] = "value Deleted Successfully";
        header("Location: ../tableOrderDetail.php");
        exit(0);
    } else {
        $_SESSION['message'] = "value Not Deleted";
        header("Location: ../tableOrderDetail.php");
        exit(0);
    }
}
