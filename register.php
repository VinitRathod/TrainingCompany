<?php
session_start();
if(!isset($_SESSION["loggedin"]) || $_SESSION['loggedin']==false)
{
    header("location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Template</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">

    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="HandheldFriendly" content="true">


    <!-- <link rel="stylesheet" href="fonts/icomoon/style.css"> -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- <link rel="stylesheet" href="css/enroll.css"> -->
    <!-- <link rel="stylesheet" href="css/styleloggedin.css"> -->
    <link rel="stylesheet" href="css/calendar.css">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">


  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>


    <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">

      <div class="container-fluid">
        <div class="d-flex align-items-center">
          <div class="site-logo mr-auto w-25"><a href="index.html"><img src="images/logo2.png" alt="CompanyLogo"></a></div>

          <div class="mx-auto text-center">
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu main-menu js-clone-nav mx-auto d-none d-lg-block  m-0 p-0">
                <li><a href="index.html#home-section" class="nav-link">Home</a></li>
                  <li><a href="index.html#courses-section" class="nav-link">Courses</a></li>
                  <li><a href="index.html" class="nav-link">Calendar</a></li>
                  <li><a href="#" class="nav-link">Corporate Training</a></li>
                  <li><a href="index.html#teachers-section" class="nav-link">About Us</a></li>
                  <li><a href="#contact-section" class="nav-link">Contact Us</a></li>
                  <li><a href="login.html" class="nav-link">Login</a></li>
                  <!-- <li><a href="#programs-section" class="nav-link">About Us</a></li> -->
              </ul>
            </nav>
          </div>

          <div class="ml-auto">
            <nav class="site-navigation position-relative text-right" role="navigation">
              <!-- <ul class="site-menu main-menu site-menu-dark js-clone-nav mr-auto d-none d-lg-block m-0 p-0">
                <li class="cta"><a href="#contact-section" class="nav-link"><span>Contact Us</span></a></li>
              </ul> -->
            </nav>
            <a href="#" class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black float-right"><span class="icon-menu h3"></span></a>
          </div>
        </div>
      </div>

    </header>
    
    <div class="intro-section" id="home-section">

        <div class="slide-1" style="background-image: url('images/hero_1.jpg');" data-stellar-background-ratio="0.5">
          <div class="container">
            <div class="row align-items-center">
              <div class="col-12">
                <div class="sign">

                    <!-- Enroll start -->
                
                      <h2>Register Yourself Now!</h2>
                      <div class="container" id="container">
                        <div class="form-container sign-up-container">
                            <?php

                                $keyId = 'rzp_test_BVjH8JxLHTWjqH';
                                $keySecret = '9qhpMA8guRAC9pzg4dGf6gpv';

                                require('config.php');
                                require('razorpay-php/Razorpay.php');
//                                session_start();

                                // Create the Razorpay Order

                                use Razorpay\Api\Api;
                                if(isset($_POST['register'])) {
                                    $name = $_POST['username'];
                                    $phone = $_POST['number'];
                                    $email = $_POST['email'];
                                    $course = $_POST['course'];
                                    $address = $_POST['address'];
                                    $price = $_POST['amount'];
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
                                        'receipt' => $receipt,
                                        'amount' => $price * 100, // 2000 rupees in paise
                                        'currency' => 'INR',
                                        'payment_capture' => 1 // auto capture
                                    ];

                                    $_SESSION['receipt'] = $receipt;

                                    $razorpayOrder = $api->order->create($orderData);

                                    $razorpayOrderId = $razorpayOrder['id'];

                                    $_SESSION['razorpay_order_id'] = $razorpayOrderId;

                                    $displayAmount = $amount = $orderData['amount'];

                                    if ($displayCurrency !== 'INR') {
                                        $url = "https://api.fixer.io/latest?symbols=$displayCurrency&base=INR";
                                        $exchange = json_decode(file_get_contents($url), true);

                                        $displayAmount = $exchange['rates'][$displayCurrency] * $amount / 100;
                                    }

                                    $checkout = 'automatic';

                                    if (isset($_GET['checkout']) and in_array($_GET['checkout'], ['automatic', 'manual'], true)) {
                                        $checkout = $_GET['checkout'];
                                    }

                                    $data = [
                                        "key" => $keyId,
                                        "amount" => $amount,
                                        "name" => "Training Company App",
                                        "description" => $course,
                                        "image" => "https://s29.postimg.org/r6dj1g85z/daft_punk.jpg",
                                        "order_id" => $razorpayOrderId,
                                        "prefill" => [
                                            "name" => $name,
                                            "email" => $email,
                                            "contact" => $phone,
                                        ],
                                        "notes" => [
                                            "address" => "Dummy Address",
                                            "merchant_order_id" => "12312321",
                                        ],
                                        "theme" => [
                                            "color" => "#F37254"
                                        ]
                                    ];

                                    if ($displayCurrency !== 'INR') {
                                        $data['display_currency'] = $displayCurrency;
                                        $data['display_amount'] = $displayAmount;
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
                                }
                            ?>
                            <form action="verify.php" method="POST">
                                <script
                                        src="https://checkout.razorpay.com/v1/checkout.js"
                                        data-key="<?php echo $data['key']?>"
                                        data-amount="<?php echo $data['amount']?>"
                                        data-currency="INR"
                                        data-name="<?php echo $data['name']?>"
                                        data-image="<?php echo $data['image']?>"
                                        data-description="<?php echo $data['description']?>"
                                        data-prefill.name="<?php echo $data['prefill']['name']?>"
                                        data-prefill.email="<?php echo $data['prefill']['email']?>"
                                        data-prefill.contact="<?php echo $data['prefill']['contact']?>"
                                        data-order_id="<?php echo $data['order_id']?>"
                                    <?php if ($displayCurrency !== 'INR') { ?> data-display_amount="<?php echo $data['display_amount']?>" <?php } ?>
                                    <?php if ($displayCurrency !== 'INR') { ?> data-display_currency="<?php echo $data['display_currency']?>" <?php } ?>
                                >
                                </script>
                                <!-- Any extra fields to be submitted with the form but not sent to Razorpay -->
<!--                                <input type="hidden" name="shopping_order_id" value="3456">-->
                            </form>
<!--                          <form action="automatic.php">-->
<!--                            <h1>Payment Information</h1>  -->
<!--                -->
<!--                              <!-- DropDown Start -->-->
<!---->
<!---->
<!--                             <!-- DropDown End -->-->
<!---->
<!--                              <!-- <input type="text" placeholder="Enter City" />-->
<!--                             <input type="text" placeholder="Enter State" />-->
<!--                              <input type="tel" placeholder="Amount in INR" />    -->-->
<!---->
<!--                              <input type="submit" onclick="window.location.href='automatic.php';" value="Pay Now" style="color: white; background-color: #7971ea;               border-radius: 20px; border: 1px solid #7971ea; font-size: 12px; font-weight: bold; padding: 12px 45px; letter-spacing: 1px;              text-transform: uppercase; transition: transform 80ms ease-in; width: 50%;"  />-->
<!---->
<!--                                <!-- <button class="customNextBtn btn btn-primary m-1"><a href="pay.html">Pay Now</a></button> -->-->
<!--                          </form>-->
                        </div>
                        <div class="form-container sign-in-container">
                          <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                              <h1>Register</h1>
                              <input type="text" name="username" placeholder="Name" required />
                              <input type="email" name="email" placeholder="Email" required />
                              <input type="tel" name="number" placeholder="Mobile Number" required pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" />
                              <input type="text" name="address" placeholder="Address" required/>
                              <input type="tel" name="amount" placeholder="Amount in INR" required/>
                              <!-- <button>Register</button> -->
                          </form>
                      </div>
                      <div class="overlay-container">
                          <div class="overlay">
                              <div class="overlay-panel overlay-left">
                                  <h1>Welcome Back!</h1>
                                  <p>To change your personal info</p>
                                 <button class="ghost" id="signIn">Previous</button>
                              </div>
                              <div class="overlay-panel overlay-right">
                                  <h1>Hello, Friend!</h1>
                                  <p>Enter your payment details and start journey with us</p>
                                  <button type="submit" name="register" class="ghost" id="signUp">Register</button>
                              </div>
                          </div>
                      </div>
                  </div>

             <!-- Enroll end -->


                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    
  
    


  </div> 

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/jquery.sticky.js"></script>
  <script src="js/main.js"></script>
  <script src="js/enroll.js"></script>

  </body>
</html>
