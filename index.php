<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>Nutrition Tracker</title>

   <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/owl.css">


  </head>

  <body>

    <!-- ***** Preloader Start ***** -->
     <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="index.php"><h2><em>Nutrition Tracker</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home
                      <span class="sr-only">(current)</span>
                    </a>
                </li>

                <li class="nav-item"><a class="nav-link" href="blog.php">Blog</a></li>

                <li class="nav-item"><a class="nav-link" href="about-us.php">About Us</a></li>

                <li class="nav-item"><a class="nav-link" href="team.php">Creators</a></li>

                <li class="nav-item"><a class="nav-link" href="contact.php">Contact Us</a></li>

                <a href="reset-password.php" class=""></a>
                    <a href="logout.php" class="nav-link">logout</a></ul>
          </div>
        </div>
      </nav>
    </header>
    <?php
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
 <?php
}else{
  header("Location: sign.php");
  exit();
}
?>



    <!-- Page Content -->
    <div>
     <div class="page-heading contact-heading header-text" style="background-image: url(assets/images/nut.jpg);">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-content">

                    <h2>Hi,<?php echo $_SESSION['name']; ?><br>Welcome to Nutrition World</h2>

          </div>
        </div>
      </div>
    </div>
  </div>




    <div class="best-features">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>About Us</h2>
            </div>
          </div>
          <div class="col-md-6">
            <div class="left-content">
              <p>Nutrition Tracker lets you easily keep track of your diet, exercises and body weight.The food diary is very simple and user-friendly. Below it, you’ll find a bar chart showing the breakdown of carbs, fat and protein for that day alongside total calories consumed.Recipes are very easy to add.</p>
              <ul class="featured-list">
                <li><a href="bmi.php">BMI (Body Mass Index) calculator</a></li>
                <li><a href="calorie.php">Track Your Daily calories</a></li>
                <li><a href="nutrition-by-age.php">Nutrition by age</a></li>
                <li><a href="healthy-living.php">Healthy Weight and living</a></li>
                <li><a href="diet-and-health.php">Diet and health condition</a></li>
                <li><a href="dietary-supplements.php">Dietary Suppliments</a></li>
                <li><a href="cooking.php">Shooping cooking and food safety</a></li>
                
              </ul>
              <a href="about-us.php" class="filled-button">Read More</a>
            </div>
            

          </div>
          <div class="col-md-6">
            <div class="right-image">
              <img src="assets/images/pexels-destiawan-nur-agustra-1034940.jpg" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="services" style="background-image: url(assets/images/nut.jpg);" >
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Latest blog posts</h2>

              <a href="blog.php">read more <i class="fa fa-angle-right"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="service-item">
              <a href="nutrition-by-age.php" class="services-item-image"><img src="assets/images/1595583230742.jpeg" class="img-fluid" alt=""></a>

                  <div class="down-content">
                    <h4><a href="nutrition-by-age.php"><strong>Nutrition By Age:</strong>View resources on nutrition and health for every stage of life, from infants to older adults.</a></h4>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="service-item">
              <a href="healthy-living.php" class="services-item-image"><img src="assets/images/the-why-of-healthy-living-and-u-1.png" class="img-fluid" alt=""></a>

                  <div class="down-content">
                      <h4><a href="healthy-living.php"><b>Healthy weight and living</b> Learn how to maintain a healthy weight, how to lose weight naturally with a healthy diet, and how to establish a positive body image. View information on exercise, popular diets and more.</a></h4>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="service-item">
              <a href="diet-and-health.php" class="services-item-image"><img src="assets/images/make-a-perfect-diet-plan-according-to-your-health-condition.jpeg" class="img-fluid" alt=""></a>

                    <div class="down-content">
                        <h4><a href="diet-and-health.php"><b>Diet and health condition</b>Get tips to keep diabetes, heart disease, and other health problems under control through healthy eating and healthy living.</a></h4>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="call-to-action">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="inner-content">
              <div class="row">
                <div class="col-md-8">
                  <h4>For any query please contact us</h4>
                  <p></p>
                </div>
                <div class="col-lg-4 col-md-6 text-right">
                  <a href="contact.php" class="filled-button">Contact Us</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="inner-content">
              <p>Copyright © 2021 - Designed By: <a>Thunder Coders(NSTI - BHUBANESWAR)</a></p>
            </div>
          </div>
        </div>
      </div>
    </footer>


    
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
  </body>
</html>
