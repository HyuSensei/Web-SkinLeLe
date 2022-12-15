<?php
session_start();
require '../db/connect.php';

if (isset($_POST['delete'])) {
    $id = mysqli_real_escape_string($connect, $_POST['delete']);

    $query = "DELETE FROM lien_he WHERE id='$id' ";
    $query_run = mysqli_query($connect, $query);

    if ($query_run) {
        $_SESSION['message'] = "value Deleted Successfully";
        header("Location: ../tableContact.php");
        exit(0);
    } else {
        $_SESSION['message'] = "value Not Deleted";
        header("Location: ../tableContact.php");
        exit(0);
    }
}

if (isset($_POST['update'])) {
    $id = mysqli_real_escape_string($connect, $_POST['id']);

    $ho_ten = mysqli_real_escape_string($connect, $_POST['ho_ten']);
    $dia_chi = mysqli_real_escape_string($connect, $_POST['dia_chi']);
    $email = mysqli_real_escape_string($connect, $_POST['email']);
    $so_dien_thoai = mysqli_real_escape_string($connect, $_POST['so_dien_thoai']);
    $noi_dung = mysqli_real_escape_string($connect, $_POST['noi_dung']);

    $query = "UPDATE lien_he SET ho_ten='$ho_ten', dia_chi='$dia_chi', email='$email', so_dien_thoai='$so_dien_thoai', noi_dung='$noi_dung',  WHERE id='$id' ";
    $query_run = mysqli_query($connect, $query);

    if ($query_run) {
        $_SESSION['message'] = "value Updated Successfully";
        header("Location: ../tableContact.php");
        exit(0);
    } else {
        $_SESSION['message'] = "value Not Updated";
        header("Location: ../tableContact.php");
        exit(0);
    }
}


if (isset($_POST['save'])) {
    $ho_ten = mysqli_real_escape_string($connect, $_POST['ho_ten']);
    $dia_chi = mysqli_real_escape_string($connect, $_POST['dia_chi']);
    $email = mysqli_real_escape_string($connect, $_POST['email']);
    $so_dien_thoai = mysqli_real_escape_string($connect, $_POST['so_dien_thoai']);
    $noi_dung = mysqli_real_escape_string($connect, $_POST['noi_dung']);

    $query = "INSERT INTO lien_he (ho_ten,dia_chi,email,so_dien_thoai,noi_dung) VALUES ('$ho_ten','$dia_chi','$email','$so_dien_thoai','$noi_dung')";

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
