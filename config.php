<?php

//$keyId = 'rzp_test_a5baidBtUn5iZN';
//$keySecret = 'P1Fmhk5aa8qXlG8mhXznAtaX';
$displayCurrency = 'INR';

$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'training_com';

$db = new mysqli($servername,$username,$password,$dbname);
if($db->connect_error){
    die("Connection Failed : ".$db->connect_error);
}
//These should be commented out in production
// This is for error reporting
// Add it to config.php to report any errors
error_reporting(E_ALL);
ini_set('display_errors', 1);