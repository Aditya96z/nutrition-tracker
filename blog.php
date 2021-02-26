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
          <a class="navbar-brand" href="index.html"><h2><em>Nutrition Tracker</em></h2></a>
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

                <li class="nav-item active"><a class="nav-link" href="blog.php">Blog</a></li>

                <li class="nav-item"><a class="nav-link" href="about-us.php">About Us</a></li>

                <li class="nav-item"><a class="nav-link" href="team.php">Creators</a></li>

                <li class="nav-item"><a class="nav-link" href="contact.php">Contact Us</a></li>


                <a href="reset-password.php" class=""></a>
                    <a href="logout.php" class="nav-link">Logout</a>
            </ul>
          </div>
        </div>
      </nav>
    </header>
    


    <!-- Page Content -->
    <br>
    <div class="products">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <div class="row">
              <div class="col-md-6">
                <div class="service-item">
                  <a href="nutrition-by-age.php" class="services-item-image"><img src="assets/images/1595583230742.jpeg" class="img-fluid" alt=""></a>

                  <div class="down-content">
                    <h4><a href="nutrition-by-age.php"><strong>Nutrition By Age:</strong>View resources on nutrition and health for every stage of life, from infants to older adults.</a></h4>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="service-item">
                  <a href="healthy-living.php" class="services-item-image"><img src="assets/images/the-why-of-healthy-living-and-u-1.png" class="img-fluid" alt=""></a>

                  <div class="down-content">
                      <h4><a href="healthy-living.php"><b>Healthy weight and living</b> Learn how to maintain a healthy weight, how to lose weight naturally with a healthy diet, and how to establish a positive body image. View information on exercise, popular diets and more.</a></h4>


                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="service-item">
                  <a href="diet-and-health.php" class="services-item-image"><img src="assets/images/make-a-perfect-diet-plan-according-to-your-health-condition.jpeg" class="img-fluid" alt=""></a>

                  <div class="down-content">
                      <h4><a href="diet-and-health.php"><b>Diet and health condition</b>Get tips to keep diabetes, heart disease, and other health problems under control through healthy eating and healthy living.</a></h4>


                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="service-item">
                  <a href="dietary-supplements.php" class="services-item-image"><img src="assets/images/U.S.-Dietary-Supplements.jpg" class="img-fluid" alt=""></a>

                  <div class="down-content">
                      <h4><a href="dietary-supplements.php"><b>Dietary Supplements</b>Find general information and resources on dietary supplements</a></h4>


                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="service-item">
                  <a href="cooking.php" class="services-item-image"><img src="assets/images/kids_shopping_with_mom.jpg" class="img-fluid" alt=""></a>

                  <div class="down-content">
                    <h4><a href="cooking.php"><b>Shoping and cooking</b> Get healthy recipes for breakfast, lunch, and dinner. Search for kid-friendly and ethnic food recipes. Learn about farmers markets, food labels, healthy groceries, and meal prep and planning.</a></h4>
                    </div>
                </div>
                </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-form">
              <div class="form-group">
                <h5>Blog Search</h5>
              </div>

              <div class="row">
                <div class="col-8">
                  <input type="text" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="basic-addon2">
                </div>

                <div class="col-4">
                  <button class="filled-button" type="button">Go</button>
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

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Book Now</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="contact-form">
              <form action="#" id="contact">
                  <div class="row">
                       <div class="col-md-6">
                          <fieldset>
                            <input type="text" class="form-control" placeholder="Pick-up location" required="">
                          </fieldset>
                       </div>

                       <div class="col-md-6">
                          <fieldset>
                            <input type="text" class="form-control" placeholder="Return location" required="">
                          </fieldset>
                       </div>
                  </div>

                  <div class="row">
                       <div class="col-md-6">
                          <fieldset>
                            <input type="text" class="form-control" placeholder="Pick-up date/time" required="">
                          </fieldset>
                       </div>

                       <div class="col-md-6">
                          <fieldset>
                            <input type="text" class="form-control" placeholder="Return date/time" required="">
                          </fieldset>
                       </div>
                  </div>
                  <input type="text" class="form-control" placeholder="Enter full name" required="">

                  <div class="row">
                       <div class="col-md-6">
                          <fieldset>
                            <input type="text" class="form-control" placeholder="Enter email address" required="">
                          </fieldset>
                       </div>

                       <div class="col-md-6">
                          <fieldset>
                            <input type="text" class="form-control" placeholder="Enter phone" required="">
                          </fieldset>
                       </div>
                  </div>
              </form>
           </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <button type="button" class="btn btn-primary">Book Now</button>
          </div>
        </div>
      </div>
    </div>


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
  </body>

</html>
