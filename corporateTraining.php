<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TrainingCalendar</title>

  <link rel="stylesheet" href="css/bootstrap/bootstrap.css">
  <link rel="stylesheet" href="css/bootstrap/bootstrap-reboot.css">
  <link rel="stylesheet" href="css/bootstrap/bootstrap-grid.css">
  <link rel="stylesheet" href="css/aos.css">
  <link rel="stylesheet" href="css/bootstrap-datepicker.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/counter.css">
  <link rel="stylesheet" href="css/calender.css">
  <link rel="stylesheet" href="css/jquery-ui.css">
  <link rel="stylesheet" href="css/jquery.fancybox.min.css">
  <link rel="stylesheet" href="css/magnific-popup.css">
  <link rel="stylesheet" href="css/mediaelementplayer.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/searchBar.css">
  <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
  <link rel="stylesheet" href="fonts/icomoon/style.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/dropDown.css">
  <link rel="stylesheet" href="css/corporateTraining.css">


  <!-- google fonts cdn link  -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">

  <!-- font awesome cdn link  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">


  <!-- <style>
      .nav-stroke:active{
        text-decoration: underline white;
      }
    </style> -->
  <!-- <style>
    .text h1 {
  font-size: 2em;
  color: white;
  text-transform: uppercase;
}

span {
  border-right: .05em solid;
  animation: caret 1s steps(1) infinite;
}

@keyframes caret {
  50% {
    border-color: transparent;
  }
}
    </style> -->

  <style>
    body,
    div,
    dl,
    dt,
    dd,
    ul,
    ol,
    li,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6,
    pre,
    form,
    fieldset,
    input,
    textarea,
    p,
    blockquote,
    th,
    td {
      padding: 0;
      margin: 0;
    }

    fieldset,
    img {
      border: 0
    }

    ol,
    ul,
    li {
      list-style: none
    }

    :focus {
      outline: none
    }

    body,
    input,
    textarea,
    select {
      font-family: 'Open Sans', sans-serif;
      font-size: 16px;
      color: #4c4c4c;
    }

    p {
      font-size: 12px;
      width: 150px;
      display: inline-block;
      margin-left: 18px;
    }

    h1 {
      font-size: 32px;
      font-weight: 300;
      color: #4c4c4c;
      text-align: center;
      padding-top: 10px;
      margin-bottom: 10px;
      margin-top: 10px;
    }

    html {
      background-color: #ffffff;
    }

    .testbox {
      /* margin: 40px auto; */
      margin-top: 100px;
      width: 500px;
      height: 720px;
      -webkit-border-radius: 8px/7px;
      -moz-border-radius: 8px/7px;
      border-radius: 8px/7px;
      background-color: #ebebeb;
      -webkit-box-shadow: 1px 2px 5px rgba(0, 0, 0, .31);
      -moz-box-shadow: 1px 2px 5px rgba(0, 0, 0, .31);
      box-shadow: 1px 2px 5px rgba(0, 0, 0, .31);
      border: solid 1px #cbc9c9;
    }

    input[type=radio] {
      visibility: hidden;
    }

    form {
      margin: 0 30px;
    }

    label.radio {
      cursor: pointer;
      text-indent: 35px;
      overflow: visible;
      display: inline-block;
      position: relative;
      margin-bottom: 15px;
    }

    label.radio:before {
      background: #3a57af;
      content: '';
      position: absolute;
      top: 2px;
      left: 0;
      width: 20px;
      height: 20px;
      border-radius: 100%;
    }

    label.radio:after {
      opacity: 0;
      content: '';
      position: absolute;
      width: 0.5em;
      height: 0.25em;
      background: transparent;
      top: 7.5px;
      left: 4.5px;
      border: 3px solid #ffffff;
      border-top: none;
      border-right: none;

      -webkit-transform: rotate(-45deg);
      -moz-transform: rotate(-45deg);
      -o-transform: rotate(-45deg);
      -ms-transform: rotate(-45deg);
      transform: rotate(-45deg);
    }

    input[type=radio]:checked+label:after {
      opacity: 1;
    }

    hr {
      color: #a9a9a9;
      opacity: 0.3;
    }

    input[type=text],
    input[type=password],
    input[type=tel],
    input[type=email] {
      width: 350px;
      height: 39px;
      -webkit-border-radius: 0px 4px 4px 0px/5px 5px 4px 4px;
      -moz-border-radius: 0px 4px 4px 0px/0px 0px 4px 4px;
      border-radius: 0px 4px 4px 0px/5px 5px 4px 4px;
      background-color: #fff;
      -webkit-box-shadow: 1px 2px 5px rgba(0, 0, 0, .09);
      -moz-box-shadow: 1px 2px 5px rgba(0, 0, 0, .09);
      box-shadow: 1px 2px 5px rgba(0, 0, 0, .09);
      border: solid 1px #cbc9c9;
      margin-left: -5px;
      margin-top: 10px;
      margin-bottom: 10px;
      padding-left: 10px;
    }

    /* input[type=password]{
  margin-bottom: 25px;
} */


    #icon {
      display: inline-block;
      width: 40px;
      background-color: #3a57af;
      padding: 8px 0px 8px 15px;
      margin-left: 15px;
      -webkit-border-radius: 4px 0px 0px 4px;
      -moz-border-radius: 4px 0px 0px 4px;
      border-radius: 4px 0px 0px 4px;
      color: white;
      -webkit-box-shadow: 1px 2px 5px rgba(0, 0, 0, .09);
      -moz-box-shadow: 1px 2px 5px rgba(0, 0, 0, .09);
      box-shadow: 1px 2px 5px rgba(0, 0, 0, .09);
      border: solid 0px #cbc9c9;
    }

    .gender {
      margin-left: 30px;
      margin-bottom: 30px;
    }

    .accounttype {
      margin-left: 8px;
      margin-top: 20px;
    }

    a.button {
      font-size: 14px;
      font-weight: 600;
      color: white;
      padding: 6px 25px 0px 20px;
      margin: 10px 8px 20px 0px;
      display: inline-block;
      float: right;
      text-decoration: none;
      width: 100px;
      height: 37px;
      -webkit-border-radius: 5px;
      -moz-border-radius: 5px;
      border-radius: 5px;
      background-color: #3a57af;
      -webkit-box-shadow: 0 3px rgba(58, 87, 175, .75);
      -moz-box-shadow: 0 3px rgba(58, 87, 175, .75);
      box-shadow: 0 3px rgba(58, 87, 175, .75);
      transition: all 0.1s linear 0s;
      top: 0px;
      position: relative;
    }

    a.button:hover {
      top: 3px;
      background-color: #2e458b;
      -webkit-box-shadow: none;
      -moz-box-shadow: none;
      box-shadow: none;

    }
  </style>


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

    <!-- NavBar Start -->
    <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">

      <div class="container-fluid">
        <div class="d-flex align-items-center">
          <div class="site-logo mr-auto w-25"><a href="index.html"><img src="images/logo2.png" alt="CompanyLogo"></a>
          </div>

          <div class="mx-auto text-center">
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu main-menu js-clone-nav mx-auto d-none d-lg-block  m-0 p-0">
                <li><a href="index.php" class="nav-link">Home</a></li>
                <li><a href="index.php#courses-section" class="nav-link">Courses</a></li>
                <li><a href="calender.html" class="nav-link">Calendar</a></li>
                <!-- <li><a href="corporateTraining.html" class="nav-link">Corporate Training</a></li> -->
                <li><a href="index.php#teachers-section" class="nav-link">About Us</a></li>
                <li><a href="#contact-section" class="nav-link">Contact Us</a></li>
                <li><a href="login.php" class="nav-link">Login</a></li>
                <!-- <li><a href="#programs-section" class="nav-link">About Us</a></li> -->
              </ul>
            </nav>
          </div>

          <div class="ml-auto">
            <nav class="site-navigation position-relative text-right" role="navigation">

            </nav>
            <a href="#" class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black float-right"><span
                class="icon-menu h3"></span></a>
          </div>
        </div>
      </div>

    </header>
    <!-- NavBar End -->

    <div class="intro-section" id="home-section">

      <div class="slide-1"
        style="background-image: url('https://edexec.co.uk/wp-content/uploads/2020/09/iStock-1066557736-678x381.jpg'); ;"
        data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-12" data-aos="fade-up" data-aos-delay="">


              <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600'
                rel='stylesheet' type='text/css'>
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

  <script>

  </script>

</body>

</html>