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
                          <form action="#">
                            <h1>Payment Information</h1>  
                
                              <!-- DropDown Start -->


                             <!-- DropDown End -->

                              <!-- <input type="text" placeholder="Enter City" />
                             <input type="text" placeholder="Enter State" />
                              <input type="tel" placeholder="Amount in INR" />    -->

                              <input type="button" onclick="window.location.href='pay.html';" value="Pay Now" style="color: white; background-color: #7971ea;               border-radius: 20px; border: 1px solid #7971ea; font-size: 12px; font-weight: bold; padding: 12px 45px; letter-spacing: 1px;              text-transform: uppercase; transition: transform 80ms ease-in; width: 50%;"  />

                                <!-- <button class="customNextBtn btn btn-primary m-1"><a href="pay.html">Pay Now</a></button> -->
                          </form>
                        </div>
                        <div class="form-container sign-in-container">
                          <form action="#">
                              <h1>Register</h1>
                              <input type="text" placeholder="Name" />
                              <input type="email" placeholder="Email" />
                              <input type="tel" placeholder="Mobile Number" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" />
                              <input type="text" placeholder="Address" />
                              <input type="tel" placeholder="Amount in INR" />
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
                                  <button class="ghost" id="signUp">Register</button>
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
