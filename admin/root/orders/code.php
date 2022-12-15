<?php
session_start();
require '../db/connect.php';

if (isset($_POST['delete'])) {
    $id = mysqli_real_escape_string($connect, $_POST['delete']);

    $query = "DELETE FROM orders WHERE id='$id' ";
    $query_run = mysqli_query($connect, $query);

    if ($query_run) {
        $_SESSION['message'] = "value Deleted Successfully";
        header("Location: ../tableOrders.php");
        exit(0);
    } else {
        $_SESSION['message'] = "value Not Deleted";
        header("Location: ../tableOrders.php");
        exit(0);
    }
}

if (isset($_POST['update'])) {
    $id = mysqli_real_escape_string($connect, $_POST['id']);

    $customer_id = mysqli_real_escape_string($connect, $_POST['customer_id']);
    $name_receiver = mysqli_real_escape_string($connect, $_POST['name_receiver']);
    $phone_receiver = mysqli_real_escape_string($connect, $_POST['phone_receiver']);
    $address_receiver = mysqli_real_escape_string($connect, $_POST['address_receiver']);
    $total_price = mysqli_real_escape_string($connect, $_POST['total_price']);
    $status = mysqli_real_escape_string($connect, $_POST['status']);
    $created_at = mysqli_real_escape_string($connect, $_POST['created_at']);
    $cart_payment = mysqli_real_escape_string($connect, $_POST['cart_payment']);

    $query = "UPDATE orders SET customer_id='$customer_id', name_receiver='$name_receiver', phone_receiver='$phone_receiver', address_receiver='$address_receiver', total_price='$total_price', status='$status', created_at='$created_at', cart_payment='$cart_payment' WHERE id='$id' ";
    $query_run = mysqli_query($connect, $query);

    if ($query_run) {
        $_SESSION['message'] = "value Updated Successfully";
        header("Location: ../tableOrders.php");
        exit(0);
    } else {
        $_SESSION['message'] = "value Not Updated";
        header("Location: ../tableOrders.php");
        exit(0);
    }
}


if (isset($_POST['save'])) {
    $customer_id = mysqli_real_escape_string($connect, $_POST['customer_id']);
    $name_receiver = mysqli_real_escape_string($connect, $_POST['name_receiver']);
    $phone_receiver = mysqli_real_escape_string($connect, $_POST['phone_receiver']);
    $address_receiver = mysqli_real_escape_string($connect, $_POST['address_receiver']);
    $total_price = mysqli_real_escape_string($connect, $_POST['total_price']);
    $status = mysqli_real_escape_string($connect, $_POST['status']);
    $status = mysqli_real_escape_string($connect, $_POST['created_at']);
    $status = mysqli_real_escape_string($connect, $_POST['cart_payment']);

    $query = "INSERT INTO orders (customer_id,name_receiver,phone_receiver,address_receiver,total_price,status,created_at,cart_payment) VALUES ('$customer_id','$name_receiver','$phone_receiver','$address_receiver','$total_price','$status','$created_at','$cart_payment')";

    $query_run = mysqli_query($connect, $query);
    if ($query_run) {
        $_SESSION['message'] = "value Created Successfully";
        header("Location: create.php");
        exit(0);
    } else {
        $_SESSION['message'] = "value Not Created";
        header("Location: create.php");
        exit(0);
    }
}
