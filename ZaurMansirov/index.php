<?php 


include 'assets/php/connect.php';

$sql = "SELECT * FROM menu";
$result = mysqli_query($conn,$sql);

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Bolt - Coming Soon Template</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css" >
    <!-- Fonts -->
    <link rel="stylesheet" type="text/css" href="assets/fonts/line-icons.css">
    <!-- Slicknav -->
    <link rel="stylesheet" type="text/css" href="assets/css/slicknav.css">
    <!-- Off Canvas Menu -->
    <link rel="stylesheet" type="text/css" href="assets/css/menu_sideslide.css">
    <!-- Color Switcher -->
    <link rel="stylesheet" type="text/css" href="assets/css/vegas.min.css">
    <!-- Animate -->
    <link rel="stylesheet" type="text/css" href="assets/css/animate.css">
    <!-- Main Style -->
    <link rel="stylesheet" type="text/css" href="assets/css/main.css">
    <!-- Responsive Style -->
    <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">

  </head>
  <body>

    <!-- Header Area wrapper Starts -->
    <header id="header-wrap">
      <div class="menu-wrap">
        <div class="menu navbar">
          <div class="menu-list navbar-collapse">
            <ul class="onepage-nev navbar-nav">
              <li class="nav-item active">
                <a class="nav-link" href="#header-wrap">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#services">Services</a>
              </li>                            
              <li class="nav-item">
                <a class="nav-link" href="#team">Team</a>
              </li>   
              <li class="nav-item">
                <a class="nav-link" href="#contact">Contact</a>
              </li>   
            </ul>
          </div>
        </div> 
        <button class="close-button" id="close-button"><i class="lni-close"></i></button>
      </div>  
      <!-- Navbar Start -->
      <nav class="navbar navbar-expand-lg fixed-top scrolling-navbar menu-bg">
        <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-navbar" aria-controls="main-navbar" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
              <span class="lni-menu"></span>
              <span class="lni-menu"></span>
              <span class="lni-menu"></span>
            </button>
            <a href="index.html" class="navbar-brand"><img src="assets/img/logo.png" alt=""></a>
          </div>
          <div class="collapse navbar-collapse" id="main-navbar">
            <ul class="navbar-nav mr-auto w-100 justify-content-end clearfix">
              <li class="nav-item" id="open-button">
                <a class="nav-link">
                  <i class="lni-menu"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>

        <!-- Mobile Menu Start -->
        <ul class="mobile-menu">
          <li>
            <a href="#header-wrap">Home</a>
          </li>
          <li>
            <a href="#services">Services</a>
          </li>
          <li>
            <a href="#team">Team</a>
          </li>
          <li>
            <a href="#contact">Contact</a>
          </li>
        </ul>
        <!-- Mobile Menu End -->
      </nav>
      <!-- Navbar End -->
    </header>
    
    

    <section id="services" class="section-padding" >
      <div class="container">        
        <div class="row">
  <?php 
        while($row = mysqli_fetch_assoc($result)) { ?>


      <div class="col-lg-4 col-md-6 col-xs-12 fadeInUp" data-animation="fadeInUp">
            <div class="services-item">
              <div class="icon">
                <i class="lni-brush"></i>
              </div>
              <h3><a href="#"><?= $row['title'] ?></a></h3>
              <p><?= $row['text'] ?></p>
            </div>
          </div> 
        
        <?php }
?>


         </div>
      </div>
    </section>

    <!-- Team Section Start -->
    <section id="team" class="section-padding">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-8 col-lg-8 col-xs-12 text-center">
            <h6 class="subtitle">
              Meet Our
            </h6>
            <h2 class="section-title">
              Our awesome team
            </h2>
            <div class="section-info">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed nulla neque 
              tempore rerum dolore accusamus, eum, officia nostrum sequi explicabo aspernatur asperiores.
            </div>
          </div>            
        </div>
        <div class="row">
          <div class="col-sm-6 col-md-6 col-lg-3">
            <!-- Team Item Starts -->
            <div class="team-item text-center">
              <div class="team-img">
                <img class="img-fluid" src="assets/img/team/team-01.jpg" alt="">
                <div class="team-overlay">
                  <div class="overlay-social-icon text-center">
                    <ul class="social-icons">
                      <li><a href="#"><i class="lni-facebook-filled" aria-hidden="true"></i></a></li>
                      <li><a href="#"><i class="lni-twitter-filled" aria-hidden="true"></i></a></li>
                      <li><a href="#"><i class="lni-instagram-filled" aria-hidden="true"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="info-text">
                <h3><a href="#">Emilly Williams</a></h3>
                <p>Product Designer</p>
              </div>
            </div>
            <!-- Team Item Ends -->
          </div>
          <div class="col-sm-6 col-md-6 col-lg-3">
            <!-- Team Item Starts -->
            <div class="team-item text-center">
              <div class="team-img">
                <img class="img-fluid" src="assets/img/team/team-02.jpg" alt="">
                <div class="team-overlay">
                  <div class="overlay-social-icon text-center">
                    <ul class="social-icons">
                      <li><a href="#"><i class="lni-facebook-filled" aria-hidden="true"></i></a></li>
                      <li><a href="#"><i class="lni-twitter-filled" aria-hidden="true"></i></a></li>
                      <li><a href="#"><i class="lni-instagram-filled" aria-hidden="true"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="info-text">
                <h3><a href="#">Patric Green</a></h3>
                <p>Front-end Developer</p>
              </div>
            </div>
            <!-- Team Item Ends -->
          </div>
          <div class="col-sm-6 col-md-6 col-lg-3">
            <!-- Team Item Starts -->
            <div class="team-item text-center">
              <div class="team-img">
                <img class="img-fluid" src="assets/img/team/team-03.jpg" alt="">
                <div class="team-overlay">
                  <div class="overlay-social-icon text-center">
                    <ul class="social-icons">
                      <li><a href="#"><i class="lni-facebook-filled" aria-hidden="true"></i></a></li>
                      <li><a href="#"><i class="lni-twitter-filled" aria-hidden="true"></i></a></li>
                      <li><a href="#"><i class="lni-instagram-filled" aria-hidden="true"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="info-text">
                <h3><a href="#">Paul Kowalsy</a></h3>
                <p>Lead Designer</p>
              </div>
            </div>
            <!-- Team Item Ends -->
          </div>
          <div class="col-sm-6 col-md-6 col-lg-3">
            <!-- Team Item Starts -->
            <div class="team-item text-center">
              <div class="team-img">
                <img class="img-fluid" src="assets/img/team/team-04.jpg" alt="">
                <div class="team-overlay">
                  <div class="overlay-social-icon text-center">
                    <ul class="social-icons">
                      <li><a href="#"><i class="lni-facebook-filled" aria-hidden="true"></i></a></li>
                      <li><a href="#"><i class="lni-twitter-filled" aria-hidden="true"></i></a></li>
                      <li><a href="#"><i class="lni-instagram-filled" aria-hidden="true"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="info-text">
                <h3><a href="#">Jhon Doe</a></h3>
                <p>Back-end Developer</p>
              </div>
            </div>
            <!-- Team Item Ends -->
          </div>
        </div>
      </div>
    </section>
    <!-- Team Section End -->



    

    <!-- Go to Top Link -->
    <a href="#" class="back-to-top">
      <i class="lni-chevron-up"></i>
    </a>

   

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="assets/js/jquery-min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/vegas.min.js"></script>
    <script src="assets/js/jquery.countdown.min.js"></script>
    <script src="assets/js/menu.js"></script>
    <script src="assets/js/classie.js"></script>
    <script src="assets/js/scrolling-nav.js"></script>
    <script src="assets/js/jquery.nav.js"></script>
    <script src="assets/js/jquery.easing.min.js"></script>
    <script src="assets/js/wow.js"></script>
    <script src="assets/js/jquery.slicknav.js"></script>
    <script src="assets/js/main.js"></script>
    <
    </script>
      
  </body>
</html>
