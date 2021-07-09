<?php

require('config.php');

session_start();

require('razorpay-php/Razorpay.php');
use Razorpay\Api\Api;
use Razorpay\Api\Errors\SignatureVerificationError;

date_default_timezone_set('Asia/Kolkata');
$date = date('d-m-y h:i:s');

$success = true;

$error = "Payment Failed";

if (empty($_POST['razorpay_payment_id']) === false)
{
    $api = new Api($keyId, $keySecret);

    try
    {
        // Please note that the razorpay order ID must
        // come from a trusted source (session here, but
        // could be database or something else)
        $attributes = array(
            'razorpay_order_id' => $_SESSION['razorpay_order_id'],
            'razorpay_payment_id' => $_POST['razorpay_payment_id'],
            'razorpay_signature' => $_POST['razorpay_signature']
        );

        $api->utility->verifyPaymentSignature($attributes);
    }
    catch(SignatureVerificationError $e)
    {
        $success = false;
        $error = 'Razorpay Error : ' . $e->getMessage();
    }
}

if ($success === true)
{
    $razorpayOrderId = $_SESSION['razorpay_order_id'];
    $email = $_SESSION['email'];
    $U_id = "SELECT id from usertable where email = '$email'";
    $result = $db->query($U_id);
    if($result->num_rows === 1){
        $row = $result->fetch_assoc();
        $id = $row["id"];
        $sql = "INSERT INTO payment(U_id,name,email,contact,address,course,amount,currency,payment_id,order_id,receipt,created_at)
        VALUES('$id','{$_SESSION['name']}','{$_SESSION['email']}','{$_SESSION['contact']}','{$_SESSION['address']}','{$_SESSION['course']}','{$_SESSION['price']}','INR','{$_POST['razorpay_payment_id']}','$razorpayOrderId','{$_SESSION['receipt']}','$date')";
        // $sql = "INSERT INTO payment(payment_id) VALUES('{$_POST['razorpay_payment_id']}')";
        if($db->query($sql)){
            echo "<p>Values Inserted</p>";
        }else{
            echo "Error: " . $sql . "<br>" . $db->error;
        }
    }
    
    $html = "<p>Your payment was successful</p>
             <p>Payment ID: {$_POST['razorpay_payment_id']}</p>";
}
else
{
    $html = "<p>Your payment failed</p>
             <p>{$error}</p>";
}

echo $html;
