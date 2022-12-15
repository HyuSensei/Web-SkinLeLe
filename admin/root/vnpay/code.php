<?php
session_start();
require '../db/connect.php';

if (isset($_POST['delete'])) {
    $id_vnpay = mysqli_real_escape_string($connect, $_POST['delete']);

    $query = "DELETE FROM vn_pay WHERE id='$id_vnpay' ";
    $query_run = mysqli_query($connect, $query);

    if ($query_run) {
        $_SESSION['message'] = "Student Deleted Successfully";
        header("Location: ../tableVnpay.php");
        exit(0);
    } else {
        $_SESSION['message'] = "Student Not Deleted";
        header("Location: ../tableVnpay.php");
        exit(0);
    }
}

if (isset($_POST['update'])) {
    // $id = mysqli_real_escape_string($connect, $_POST['id']);
    $id_vnpay  = mysqli_real_escape_string($connect, $_POST['id_vnpay ']);
    $code_cart = mysqli_real_escape_string($connect, $_POST['code_cart']);
    $vnp_amount = mysqli_real_escape_string($connect, $_POST['vnp_amount']);
    $vnp_bankcode = mysqli_real_escape_string($connect, $_POST['vnp_bankcode']);
    $vnp_banktranno = mysqli_real_escape_string($connect, $_POST['vnp_banktranno']);
    $vnp_cardtype = mysqli_real_escape_string($connect, $_POST['vnp_cardtype']);
    $vnp_orderinfo = mysqli_real_escape_string($connect, $_POST['vnp_orderinfo']);
    $vnp_paydate = mysqli_real_escape_string($connect, $_POST['vnp_paydate']);
    $vnp_tmncode = mysqli_real_escape_string($connect, $_POST['vnp_tmncode']);
    $vnp_transactionno = mysqli_real_escape_string($connect, $_POST['vnp_transactionno']);

    $query = "UPDATE vn_pay SET id_vnpay='$id_vnpay', code_cart='$code_cart', vnp_amount='$vnp_amount', vnp_bankcode='$vnp_bankcode', vnp_banktranno='$vnp_banktranno', vnp_cardtype='$vnp_cardtype', vnp_orderinfo='$vnp_orderinfo', vnp_paydate='$vnp_paydate' , vnp_tmncode='$vnp_tmncode' , vnp_transactionno='$vnp_transactionno' WHERE id='$id_vnpay' ";
    $query_run = mysqli_query($connect, $query);

    if ($query_run) {
        $_SESSION['message'] = "Student Updated Successfully";
        header("Location: ../tableVnpay.php");
        exit(0);
    } else {
        $_SESSION['message'] = "Student Not Updated";
        header("Location: ../tableVnpay.php");
        exit(0);
    }
}


if (isset($_POST['save'])) {
    $id_vnpay  = mysqli_real_escape_string($connect, $_POST['id_vnpay ']);
    $code_cart = mysqli_real_escape_string($connect, $_POST['code_cart']);
    $vnp_amount = mysqli_real_escape_string($connect, $_POST['vnp_amount']);
    $vnp_bankcode = mysqli_real_escape_string($connect, $_POST['vnp_bankcode']);
    $vnp_banktranno = mysqli_real_escape_string($connect, $_POST['vnp_banktranno']);
    $vnp_cardtype = mysqli_real_escape_string($connect, $_POST['vnp_cardtype']);
    $vnp_orderinfo = mysqli_real_escape_string($connect, $_POST['vnp_orderinfo']);
    $vnp_paydate = mysqli_real_escape_string($connect, $_POST['vnp_paydate']);
    $vnp_tmncode = mysqli_real_escape_string($connect, $_POST['vnp_tmncode']);
    $vnp_transactionno = mysqli_real_escape_string($connect, $_POST['vnp_transactionno']);

    $query = "INSERT INTO vn_pay (id_vnpay,code_cart,vnp_amount,vnp_bankcode,vnp_banktranno,vnp_cardtype,vnp_orderinfo,vnp_paydate,vnp_tmncode,vnp_transactionno) VALUES ('$id_vnpay','$code_cart','$vnp_amount','$vnp_bankcode','$vnp_banktranno','$vnp_cardtype','$vnp_orderinfo','$vnp_paydate' ,'$vnp_tmncode' ,'$vnp_transactionno')";

    $query_run = mysqli_query($connect, $query);
    if ($query_run) {
        $_SESSION['message'] = "Student Created Successfully";
        header("Location: create.php");
        exit(0);
    } else {
        $_SESSION['message'] = "Student Not Created";
        header("Location: create.php");
        exit(0);
    }
}
