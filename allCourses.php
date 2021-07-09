<?php
    include_once "connection.php";
?>
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
    <link rel="stylesheet" href="css/allCourse.css">


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

    <!-- NavBar Start -->
    <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">

      <div class="container-fluid">
        <div class="d-flex align-items-center">
          <div class="site-logo mr-auto w-25"><a href="index.html"><img src="images/logo2.png" alt="CompanyLogo"></a></div>

          <div class="mx-auto text-center">
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu main-menu js-clone-nav mx-auto d-none d-lg-block  m-0 p-0">
                  <li><a href="index.html#home-section" class="nav-link">Home</a></li>
                  <li><a href="#courses-section" class="nav-link">Courses</a></li>
                  <li><a href="calendar.html#programs-section" class="nav-link">Calendar</a></li>
                  <li><a href="training.html#teachers-section" class="nav-link">Corporate Training</a></li>
                  <li><a href="index.html#contact-section" class="nav-link">Contact Us</a></li>
                  <li><a href="#footer-section" class="nav-link">About Us</a></li>
                  <li><a href="login.html#login-section" class="nav-link">Login</a></li>
                
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
    <!-- NavBar End -->

    

    <div class="intro-section single-cover" id="courses-section">

        <div class="slide-1" style="background-image: url('https://mk0omswamil19tswp4ab.kinstacdn.com/wp-content/uploads/2021/06/BC8D7CD6-BF43-4818-9B65-C9B53D53F358.gif');" data-stellar-background-ratio="0.5">
          <div class="container">
            <div class="row align-items-center">
              <div class="col-12">
              <div class="row justify-content-center align-items-center text-center">
                <div class="col-lg-6">
                  <h1 data-aos="fade-up" data-aos-delay="0" style="Color:white;">All Courses!</h1>
                </div>
              </div>  
              </div>
            </div>
            </div>
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Courses start-->
    <div class="site-section bg-light" id="courses-section" >
      <div class="container" >
        <!-- <div class="row"> -->

           <!-- <div class="owl-carousel col-12 nonloop-block-14"> -->

            <section class="gallery">
              <div class="container">
                <div class="toolbar">
                  <div class="search-wrapper">
                    <!-- <input type="search" placeholder="Search for photos"> -->
                    <div class="counter">
                      <!-- Total photos: <span>12</span> -->
                    </div>
                  </div>
                  <ul class="view-options">
                    <li class="zoom">
                      <input type="range" min="180" max="380" value="280">
                    </li>
                    <li class="show-grid active">
                      <button disabled>
                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/162656/grid-view.svg" alt="grid view">  
                      </button>
                    </li>
                    <li class="show-list">
                      <button>
                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/162656/list-view.svg" alt="list view">  
                      </button>
                    </li>
                  </ul>
                </div>
                <ol class="image-list grid-view">
                    <?php
                        $sql = "SELECT * from course";
                        $result = mysqli_query($con,$sql);
                        if($result){
                            while($row = mysqli_fetch_assoc($result)){
                    ?>
                  <li>
                    <figure>
                        <figcaption>
                        <div class="course bg-white h-100 align-self-stretch">
                          <figure class="m-0">
                            <img src="images/img_5.jpg" alt="Image" class="img-fluid">
                          </figure>
                          <div class="course-inner-text py-4 px-4">
                            <span class="course-price"><?php echo $row['amount'];?></span>
                            <div class="meta"><span class="icon-clock-o"></span>2 Lessons / 5 week</div>
                            <h3><a href="#"><?php echo $row['C_name'];?></a></h3>
                            <p><?php echo $row['details'];?></p>
                          </div>
                          <div class="d-flex border-top stats">
                            <div class="py-3 px-4"><span class="icon-users"></span><a href='downloadPDF.php?file=<?php echo $row["pdf"]?>'>Download File</a></div>
                            <div class="py-3 px-4 w-25 ml-auto border-left"><span class="icon-chat"></span></div>
                          </div>
                        </div>
                      </figcaption>
                    </figure>
                  </li>
                    <?php
                            }
                        }else{
                            echo 'No Course Added';
                        }
                    ?>
                </ol>
              </div>
            </section>


           <!-- </div> -->



        <!-- </div> -->
        
      </div>
    </div>
    <!-- Courses end-->



    
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
  <script src="js/counter.js"></script>

  <script src="js/main.js"></script>
  <script src="js/allCourse.js"></script>



  <!-- <script>
    function switchClass(i) {
   var lis = $('#home-news > div');
   lis.eq(i).removeClass('home_header_on');
   lis.eq(i).removeClass('home_header_out');
    lis.eq(i = ++i % lis.length).addClass('home_header_on');
    lis.eq(i = ++i % lis.length).addClass('home_header_out');
    setTimeout(function() {
        switchClass(i);
    }, 3500);
}

$(window).load(function() {
   switchClass(-1);
});
  </script> -->

  </body>
</html>
