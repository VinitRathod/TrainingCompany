<?php require_once ("controllerUserData.php"); ?>
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


    <link rel="stylesheet" href="fonts/icomoon/style.css">
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
                  <li><a href="index.php" class="nav-link">Home</a></li>
                  <li><a href="index.html#courses-section" class="nav-link">Courses</a></li>
                  <li><a href="calendar.html#programs-section" class="nav-link">Calendar</a></li>
                  <li><a href="corporateTraining.php" class="nav-link">Corporate Training</a></li>
                  <li><a href="index.html#contact-section" class="nav-link">Contact Us</a></li>
                  <li><a href="#footer-section" class="nav-link">About Us</a></li>
                  <li><a href="#login-section" class="nav-link">Login</a></li>
                  <!-- <li><a href="#programs-section" class="nav-link">About Us</a></li> -->
              </ul>
            </nav>
          </div>

          <div class="ml-auto ">
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
    
    <div class="intro-section" id="login-section">

        <div class="slide-1" style="background-image: url('https://shrm-res.cloudinary.com/image/upload/c_crop,h_1192,w_2121,x_0,y_75/w_auto:100,w_1200,q_35,f_auto/v1/Employee%20Relations/iStock-589124340_wdzo3j.jpg');" data-stellar-background-ratio="0.5">
          <div class="container">
            <div class="row align-items-center">
              <div class="col-12">
                <div class="sign">

                    <!--sign-->
                  <div class="container" id="container">
                    <div class="form-container sign-up-container">
                      <form action="login.php" method="post" id="signup_form">
                        <h1 class="title">Sign Up</h1>
                        <br>
                        <?php
                    if(count($errors) > 0){
                        ?>
                        <div class="alert alert-danger text-center">
                            <?php
                            foreach($errors as $showerror){
                                echo $showerror;
                            }
                            ?>
                        </div>
                        <?php
                    }
                    ?>
                        
                        <div id="error_signup_name"></div>
                        <input type="text" id="name_signup" name="name" placeholder="Name" />
                        <div id="error_signup_email"></div>
                        <input type="email" id="mail_signup" name="email" placeholder="E-mail" />
                        <div id="error_signup_pwd1"></div>
                        <input type="password" id="pwd1_signup" name="password" placeholder="Password" />
                        <div id="error_signup_pwd2"></div>
                        <input type="password" id="pwd2_signup" name="cpassword" placeholder="Repeat Password" />
                        <button type="submit" name="signup">Sign Up</button>
                      </form>
                    </div>

                    <div class="form-container sign-in-container">

                      <form action="login.php" method="post" id="signin_form">
                        <h1 class="title">Sign in</h1>
                        <br>
                        <?php
                    if(count($errors) > 0){
                        ?>
                        <div class="alert alert-danger text-center">
                            <?php
                            foreach($errors as $showerror){
                                echo $showerror;
                            }
                            ?>
                        </div>
                        <?php
                    }
                    ?>
                        <div id="error_signin_mail"></div>
                        <input type="email" id="mailsignin" placeholder="Email" name="email" placeholder="Username/E-mail" />
                        <div id="error_signin_pwd"></div>
                        <input type="password" id="pwdsignin" name="password" placeholder="Password" />
                        <a href="mail_input.html">Forgot your password?</a>
                        <button type="submit" name="login">Sign In</button>
                      </form>
                    </div>
                    <div class="overlay-container">
                      <div class="overlay">
                      <div id="overlay-left" class="overlay-panel overlay-left">
                            <h1>Welcome Back!</h1>
                            <p>To keep connected with us please login with your personal info</p>
                            <button class="ghost" id="signIn">Sign In</button>
                          </div>
                          <div class="overlay-panel overlay-right">
                            <h1>Hello, Learner!</h1>
                            <p>Enter your personal details and start journey with us</p>
                            <button class="ghost" id="signUp">Sign Up</button>
                          </div>
                      </div>
                    </div>
                </div>
              </div>
              <!--end-->


                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    
  
      <footer class="footer-section bg-dark" id="footer-section">     
        <div class="container">
          <div class="row">
            <div class="col-md-4">
              <h3>About Us</h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea, optio?</p>
            </div>
  
            <div class="col-md-3 ml-auto">
              <h3>Links</h3>
              <ul class="list-unstyled footer-links">
                <li><a href="index.php#home-section" class="nav-link">Home</a></li>
                <li><a href="index.html#courses-section" class="nav-link">Courses</a></li>
                <li><a href="calender.html" class="nav-link">Calender</a></li>
                <li><a href="corporateTraining.html" class="nav-link">Corporate Training</a></li>
              </ul>
            </div>
  
            <div class="col-md-4">
              <h3>Subscribe</h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, animi.</p>
              <!-- form start -->
              <form action="#" target="_blank" class="footer-subscribe">
                <div class="d-flex mb-5">
  
                  <input type="button" class="btn btn-primary rounded-0" value="Subscribe">
                </div>
              </form>
              <!-- form end -->
            </div>
  
          </div>
  
          <div class="row pt-5 mt-5 text-center">
            <div class="col-md-12">
              <div class="border-top pt-5">
  
              </div>
            </div>
  
          </div>
        </div>
        </div>
      </footer>  


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
