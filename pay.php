<?php

require('config.php');
require('razorpay-php/Razorpay.php');
session_start();

// Create the Razorpay Order

use Razorpay\Api\Api;

$name=$_POST['username'];
$phone=$_POST['number'];
$email=$_POST['email'];
$course=$_POST['course'];
$address=$_POST['address'];
$price=$_POST['amount'];
// $fourRandomDigit = mt_rand(1000,9999);

$_SESSION['name'] = $name;
$_SESSION['email'] = $email;
$_SESSION['contact'] = $phone;
$_SESSION['address'] = $address;
$_SESSION['course'] = $course;
$_SESSION['price'] = $price;

$api = new Api($keyId, $keySecret);
$receipt = uniqid('txn_');

date_default_timezone_set('Asia/Kolkata');
$date = date('d-m-y h:i:s');

//
// We create an razorpay order using orders api
// Docs: https://docs.razorpay.com/docs/orders
//
$orderData = [
    'receipt'         => $receipt,
    'amount'          => $price * 100, // 2000 rupees in paise
    'currency'        => 'INR',
    'payment_capture' => 1 // auto capture
];

$_SESSION['receipt'] = $receipt;

$razorpayOrder = $api->order->create($orderData);

$razorpayOrderId = $razorpayOrder['id'];

$_SESSION['razorpay_order_id'] = $razorpayOrderId;

$displayAmount = $amount = $orderData['amount'];

if ($displayCurrency !== 'INR')
{
    $url = "https://api.fixer.io/latest?symbols=$displayCurrency&base=INR";
    $exchange = json_decode(file_get_contents($url), true);

    $displayAmount = $exchange['rates'][$displayCurrency] * $amount / 100;
}

$checkout = 'automatic';

if (isset($_GET['checkout']) and in_array($_GET['checkout'], ['automatic', 'manual'], true))
{
    $checkout = $_GET['checkout'];
}

$data = [
    "key"               => $keyId,
    "amount"            => $amount,
    "name"              => "Training Company App",
    "description"       => $course,
    "image"             => "https://s29.postimg.org/r6dj1g85z/daft_punk.jpg",
    "order_id"          => $razorpayOrderId,
    "prefill"           => [
    "name"              => $name,
    "email"             => $email,
    "contact"           => $phone,
    ],
    "notes"             => [
    "address"           => "Dummy Address",
    "merchant_order_id" => "12312321",
    ],
    "theme"             => [
    "color"             => "#F37254"
    ]
];

if ($displayCurrency !== 'INR')
{
    $data['display_currency']  = $displayCurrency;
    $data['display_amount']    = $displayAmount;
}

// $paymentId = $_POST['razorpay_payment_id'];

// $sql = "INSERT INTO payment(name,email,contact,address,course,amount,currency,order_id,receipt,created_at)
//         VALUES('$name','$email','$phone','$address','$course','$price','INR','$razorpayOrderId','$receipt','$date')";
// if($db->query($sql)){
//     $inserted = "Values Inserted in the Database";
//     $_SESSION['inserted'] = $inserted;
// }

$json = json_encode($data);

require("{$checkout}.php");
