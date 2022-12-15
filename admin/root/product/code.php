<?php
session_start();
require '../db/connect.php';

if (isset($_POST['delete'])) {
    $id = mysqli_real_escape_string($connect, $_POST['delete']);

    $query = "DELETE FROM san_pham WHERE id='$id' ";
    $query_run = mysqli_query($connect, $query);

    if ($query_run) {
        $_SESSION['message'] = "value Deleted Successfully";
        header("Location: ../productTable.php");
        exit(0);
    } else {
        $_SESSION['message'] = "value Not Deleted";
        header("Location: ../productTable.php");
        exit(0);
    }
}

if (isset($_POST['update'])) {
    $id = mysqli_real_escape_string($connect, $_POST['id']);

    $ten_san = mysqli_real_escape_string($connect, $_POST['ten_san']);
    $mo_ta = mysqli_real_escape_string($connect, $_POST['mo_ta']);
    $anh = mysqli_real_escape_string($connect, $_POST['anh']);
    $gia = mysqli_real_escape_string($connect, $_POST['gia']);
    $khuyen_mai = mysqli_real_escape_string($connect, $_POST['khuyen_mai']);
    $danh_muc = mysqli_real_escape_string($connect, $_POST['danh_muc']);

    $query = "UPDATE san_pham SET ten_san='$ten_san', mo_ta='$mo_ta', anh='$anh', gia='$gia', khuyen_mai='$khuyen_mai', danh_muc='$danh_muc' WHERE id='$id' ";
    $query_run = mysqli_query($connect, $query);

    if ($query_run) {
        $_SESSION['message'] = "value Updated Successfully";
        header("Location: ../productTable.php");
        exit(0);
    } else {
        $_SESSION['message'] = "value Not Updated";
        header("Location: ../productTable.php");
        exit(0);
    }
}


if (isset($_POST['save'])) {
    $ten_san = mysqli_real_escape_string($connect, $_POST['ten_san']);
    $mo_ta = mysqli_real_escape_string($connect, $_POST['mo_ta']);
    $anh = mysqli_real_escape_string($connect, $_POST['anh']);
    $gia = mysqli_real_escape_string($connect, $_POST['gia']);
    $khuyen_mai = mysqli_real_escape_string($connect, $_POST['khuyen_mai']);
    $danh_muc = mysqli_real_escape_string($connect, $_POST['danh_muc']);

    $query = "INSERT INTO san_pham (ten_san,mo_ta,anh,gia,khuyen_mai,danh_muc) VALUES ('$ten_san','$mo_ta','$anh','$gia','$khuyen_mai','$danh_muc')";

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
