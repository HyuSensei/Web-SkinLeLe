<?php
session_start();
date_default_timezone_set('Asia/Ho_Chi_Minh');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
  
$vnp_TmnCode = "9R6CA62A"; //Website ID in VNPAY System
$vnp_HashSecret = "MFBXWWHMXHJJAFIZSBHEHZIGHWKXVTLM"; //Secret key
$vnp_Url = "https://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
$vnp_Returnurl = "http://localhost/Bao_Cao_Web_Nang_Cao-NXD/vnpay_return.php";
$vnp_apiUrl = "http://sandbox.vnpayment.vn/merchant_webapi/merchant.html";
//Config input format
//Expire
$startTime = date("YmdHis");
$expire = date('YmdHis',strtotime('+15 minutes',strtotime($startTime)));
$code_order = rand(0, 9999);

$cart = "";
$total = 0;
if (isset($_SESSION['cart'])) {
    $cart = $_SESSION['cart'];
}
if (is_array($cart) || is_object($cart))
    foreach ($cart as $id => $each):
        $sum = $each['gia'] * $each['so_luong'];
        $total += $sum;
    endforeach;
$vnp_TxnRef = $code_order; //Mã đơn hàng. Trong thực tế Merchant cần insert đơn hàng vào DB và gửi mã này sang VNPAY
$vnp_OrderInfo = 'Thanh toán đơn hàng tại Website';
$vnp_OrderType = 'billpayment';
$vnp_Amount = $total*100;
$vnp_Locale = 'vn';
$vnp_BankCode = $_POST['bank_code'];
$vnp_IpAddr = $_SERVER['REMOTE_ADDR'];

$vnp_ExpireDate =$expire ;

$inputData = array(
    "vnp_Version" => "2.1.0",
    "vnp_TmnCode" => $vnp_TmnCode,
    "vnp_Amount" => $vnp_Amount,
    "vnp_Command" => "pay",
    "vnp_CreateDate" => date('YmdHis'),
    "vnp_CurrCode" => "VND",
    "vnp_IpAddr" => $vnp_IpAddr,
    "vnp_Locale" => $vnp_Locale,
    "vnp_OrderInfo" => $vnp_OrderInfo,
    "vnp_OrderType" => $vnp_OrderType,
    "vnp_ReturnUrl" => $vnp_Returnurl,
    "vnp_TxnRef" => $vnp_TxnRef,
    "vnp_ExpireDate"=>$vnp_ExpireDate
    
);

if (isset($vnp_BankCode) && $vnp_BankCode != "") {
    $inputData['vnp_BankCode'] = $vnp_BankCode;
}


//var_dump($inputData);
ksort($inputData);
$query = "";
$i = 0;
$hashdata = "";
foreach ($inputData as $key => $value) {
    if ($i == 1) {
        $hashdata .= '&' . urlencode($key) . "=" . urlencode($value);
    } else {
        $hashdata .= urlencode($key) . "=" . urlencode($value);
        $i = 1;
    }
    $query .= urlencode($key) . "=" . urlencode($value) . '&';
}

$vnp_Url = $vnp_Url . "?" . $query;
if (isset($vnp_HashSecret)) {
    $vnpSecureHash =   hash_hmac('sha512', $hashdata, $vnp_HashSecret);//  
    $vnp_Url .= 'vnp_SecureHash=' . $vnpSecureHash;
}
$returnData = array('code' => '00'
    , 'message' => 'success'
    , 'data' => $vnp_Url);
    if (isset($_POST['redirect'])) {
    $_SESSION['code_cart'] = $code_order;
        header('Location: ' . $vnp_Url);
        die();
    } else {
        echo json_encode($returnData);
    }
    $name_receiver=$phone_number_receiver=$address_receiver="";
    if(isset($_POST['name_receiver'])){
        $name_receive=$_POST['name_receiver'];
        $_SESSION['name_receiver'] = $name_receive;
    }
    if(isset($_POST['phone_number_receiver'])){
        $phone_number_receiver=$_POST['phone_number_receiver'];
        $_SESSION['phone_number_receiver'] = $phone_number_receiver;
    }
    if(isset($_POST['address_receiver'])){
        $address_receiver=$_POST['address_receiver'];
        $_SESSION['address_receiver'] = $address_receiver;
    }
