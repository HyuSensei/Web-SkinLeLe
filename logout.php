<?php

session_start();
unset($_SESSION['id']);
unset($_SESSION['name']);
unset($_SESSION['email']);
unset($_SESSION['phone_number']);
unset($_SESSION['address']);
setcookie('remember',null,-1);
header('location:index.php');