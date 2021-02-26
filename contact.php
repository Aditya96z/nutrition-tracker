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
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home
                      <span class="sr-only">(current)</span>
                    </a>
                </li>

                <li class="nav-item"><a class="nav-link" href="blog.php">Blog</a></li>

                <li class="nav-item"><a class="nav-link" href="about-us.php">About Us</a></li>

                <li class="nav-item"><a class="nav-link" href="team.php">Creators</a></li>

                <li class="nav-item active"><a class="nav-link" href="contact.php">Contact Us</a></li>



                <a href="reset-password.php" class=""></a>
                    <a href="logout.php" class="nav-link">Logout</a>


            </ul>
          </div>
        </div>
      </nav>
    </header>

    <!-- Page Content -->
    <div class="page-heading contact-heading header-text" style="background-image: url(assets/images/pexels-lisa-fotios-1172019.jpg);">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-content">
              <h4>We are always happy to serve you</h4>
              <h2>Contact Us</h2>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="send-message">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Send us a Message</h2>
            </div>
          </div>
          <div class="col-md-8">
            <div class="contact-form">
              <form id="contact" action="" method="post">
                    <?php
                    session_start();
                  if($_SERVER["REQUEST_METHOD"] == "POST"){
                    if (isset($_POST['name'])) {

                        if (empty(($_POST['name'])) || empty(($_POST['email'])) || empty(($_POST['subject'])) || empty(($_POST['msg'])) || empty(($_POST['captcha']))) {
                            echo "All the fields is required";
                        } else if ($_SESSION['catcha_text'] != $_POST['captcha']) {
                            echo "Catcha is not matched , Try again..";
                        } else {

                            // if everthing is fine we can store data in mysql database
                            //connect to the db
                            $conn = new mysqli("sql210.epizy.com", "epiz_27899764", "aD7mo8wzimwD");
                            $conn->select_db("epiz_27899764_contactus");
                            // here you need to write insert query

                            $name = $_POST['name'];
                            $email = $_POST['email'];
                            $subject = $_POST['subject'];
                            $msg = $_POST['msg'];
                            $conn->query("INSERT INTO contactus (name , email, subject, msg) values ('$name' ,'$email','$subject','$msg')");
                            echo "thanks for contacting us";
                        }
                    }
                  }
                    ?>
                  <br>
                <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="name" type="text" class="form-control" id="name" placeholder="Full Name" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="email" type="text" class="form-control" id="email" placeholder="email" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="subject" type="text" class="form-control" id="subject" placeholder="Subject" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <textarea name="msg" rows="6" class="form-control" id="msg" placeholder="Your Message" required=""></textarea>
                    </fieldset>
                  </div>
                    <div class="col-lg-12">
                    <fieldset>
                      <input type="text" id="captcha" name="captcha" class="form-control">
                          </fieldset>
                    </div>
                    <div class="col-lg-12">
                    <fieldset>
                      <img src="captcha.php" style="border: 4px solid #28a74591; border-radius: 10px; margin-bottom: 20px;">
                        <a href="">
                            <i class="fa fa-refresh" aria-hidden="true"></i>
                        </a>
                    </fieldset>
                    </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <button type="submit" id="form-submit" class="filled-button">Send Message</button>
                          <div class="clearfix"></div>
                    </fieldset>
                  </div>
                </div>
              </form>
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
