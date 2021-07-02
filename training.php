<!DOCTYPE html>
<html lang="en">
  <head>
    <title>TemplateCopy</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">

    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="HandheldFriendly" content="true">


    <link rel="stylesheet" href="css/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap/bootstrap-reboot.css">
    <link rel="stylesheet" href="css/bootstrap/bootstrap-grid.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/counter.css">
    <link rel="stylesheet" href="css/calendar.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/mediaelementplayer.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- <link rel="stylesheet" href="css/searchBar.css">  -->
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/corporateTraining.css">

    <!-- google fonts cdn link  -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">


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
                  <li><a href="calendar.html#programs-section" class="nav-link">Calendar</a></li>
                  <li><a href="#teachers-section" class="nav-link">Corporate Training</a></li>
                  <li><a href="index.html#contact-section" class="nav-link">Contact Us</a></li>
                  <li><a href="footer-section" class="nav-link">About Us</a></li>
                  <li><a href="login.html#login-section" class="nav-link">Login</a></li>
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
    
    <div class="intro-section" id="teachers-section">

        <div class="slide-1" style="background-image: url('images/hero_1.jpg');" data-stellar-background-ratio="0.5">
          <div class="container">
            <div class="row align-items-center">
              <div class="col-12">
                <div class="sign">
                 
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
      <!-- </div> -->

      <div class="site-section courses-title" id="#teachers-section">
      <div class="container">
        <div class="row mb-5 justify-content-center">
          <div class="col-lg-7 text-center" data-aos="fade-up" data-aos-delay="">
            <!-- <h2 class="section-title">Courses</h2> -->
            <h2 class="section-title">Training Calendar</h2>
            <!-- <p class="mb-5" style="color: white;">The best we promise the best we are !</p> -->
            <p style="color: white;">We aim to make studying SIMPLE, EASY and ACCESSIBLE to EVERYONE thus we collected the BEST COURSES in the world in one place.</p>
          </div>
        </div>
      </div>
    </div>
 



    <div class="site-section" id="#teachers-section" style="background-color: #e6e6e6;">
      <div class="container">

        <div class="row mb-5 justify-content-center">
          <div class="col-lg-7 mb-5 text-center"  data-aos="fade-up" data-aos-delay="">
            <!-- <h2 class="section-title">Our Teachers</h2>
            <p class="mb-5">The best we promise the best we are !</p> -->

              
            <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600' rel='stylesheet' type='text/css'>
            <link href="//netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome.css" rel="stylesheet">

              <div class="testbox">
                <h1>Training Form</h1>
                <?php 
                include_once ("connection.php");
                  if(isset($_POST['username'])){
                      $name = $_POST['username'];
                      $number = $_POST['number'];
                      $email = $_POST['email'];
                      $companyName = $_POST['company_name'];
                      $numberOfEmp = $_POST['emp'];
                      $course = $_POST['course'];
                      $foundUs = $_POST['found'];
                      $comments = $_POST['comments'];
                      $IP = $_SERVER['REMOTE_ADDR'];
              
                      $MAC = exec('getmac');
                      $MAC = strtok($MAC, ' ');
                      date_default_timezone_set("Asia/Kolkata");
                      $currentTime = date("h:i:sa");
                      $t = time();
                      $date = date("d-m-Y",$t);
                      $timeStamp = $date. " " .$currentTime;
                  
                      if(empty($name)) {
                          $empty[] = "<b>Name</b>";		
                      }
                      if(empty($email)) {
                          $empty[] = "<b>Email</b>";
                      }
                      if(empty($number)) {
                          $empty[] = "<b>Phone Number</b>";
                      }	
                      if(empty($companyName)) {
                          $empty[] = "<b>Company Name</b>";
                      }
                      if(empty($numberOfEmp)) {
                          $empty[] = "<b>Please Enter Number of Employees</b>";
                      }
                      
                      if(!empty($empty)) {
                          $output = json_encode(array('type'=>'error', 'text' => implode(", ",$empty) . ' Required!'));
                          die($output);
                      }
                  
                      $sql = "INSERT INTO corporate_training_form(name,mobile_no,email,company_name,
                          no_of_emp,course,found_us,comments,ip_addr,mac_addr,time_stamp) VALUES('".$name."','".$number."','".$email."','".$companyName."','".$numberOfEmp."'
                          ,'".$course."','".$foundUs."','".$comments."','".$IP."','".$MAC."','".$timeStamp."')";
                  
                      if($con->query($sql)){
                          echo "
                          <form action='index.php'>
                              <input type='submit' value='Go to Home Page'>
                          </form>";
                          // $name = '';
                          // header('Location: '.$_SERVER['PHP_SELF']);  
                      }else{
                        echo "Error : ".$con->error;
                      }
                  }
                  else{
              ?>
              
                              <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                                <hr>
              
                                <label id="icon" for="name"><i class="fa fa-user"></i></label>
                                <input type="text" name="username" id="name" placeholder="Username" required />
                                <label id="icon" for="name"><i class="fas fa-phone"></i></label>
                                <input type="tel" name="number" id="name" placeholder="Mobile Number" required />
                                <label id="icon" for="name"><i class="fa fa-envelope"></i></label>
                                <input type="email" name="email" id="name" placeholder="Professional Email Id" required />
                                <label id="icon" for="name"><i class="fas fa-building"></i></label>
                                <input type="text" name="company_name" id="name" placeholder="Company Name" required />
                                <!-- <label id="icon" for="name"><i class="fas fa-address-card"></i></label>
                <input type="text" name="company_address" id="name" placeholder="Company Address" required/> -->
                                <label id="icon" for="name"><i class="fas fa-user-friends"></i></label>
                                <input type="tel" name="emp" id="name" placeholder="Number of Employees" required />
                                <label id="icon" for="name"><i class="fas fa-book"></i></label>
                                <input type="text" name="course" id="name" placeholder="Specify Your Requirements" required />
                                <label id="icon" for="name"><i class="fas fa-user-friends"></i></label>
                                <input type="text" name="found" id="name" placeholder="How did you find us?" required />
                                <label id="icon" for="name"><i class="fas fa-comments"></i></label>
                                <input type="text" name="comments" id="name" placeholder="Comment" required />
                                <hr>
              
                                <!-- <a href="#" class="button">Register</a> -->
                                <input type="submit" class="btn btn-primary" name='submit' value='Register'>
                              </form>
                              <?php } ?>
              </div>

          </div>
        </div>
      </div>
    </div>

    
    
    <!-- </div> -->


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
              <li><a href="index.html#home-section" class="nav-link">Home</a></li>
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
  </div> <!-- .site-wrap -->

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

  </body>
</html>
