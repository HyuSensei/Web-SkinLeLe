<?php
session_start();
require '../db/connect.php';

if (isset($_POST['delete'])) {
    $id = mysqli_real_escape_string($connect, $_POST['delete']);

    $query = "DELETE FROM order_product WHERE order_id='$order_id' ";
    $query_run = mysqli_query($connect, $query);

    if ($query_run) {
        $_SESSION['message'] = "Student Deleted Successfully";
        header("Location: ../tableOderDetail.php");
        exit(0);
    } else {
        $_SESSION['message'] = "Student Not Deleted";
        header("Location: ../tableOderDetail.php");
        exit(0);
    }
}
