<!DOCTYPE html>
<html>
<head>
	<title>SIGN UP</title>
	<link rel="stylesheet" type="text/css" href="assets/css/style_q.css">
</head>
<body>
     <form action="signup-check.php" method="post">
     	<h2>SIGN UP</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

          <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>

          <label>Name</label>
          <?php if (isset($_GET['name'])) { ?>
               <input type="text"
                      name="name"
                      placeholder="Name"
                      value="<?php echo $_GET['name']; ?>"><br>
          <?php }else{ ?>
               <input type="text"
                      name="name"
                      placeholder="Name"><br>
          <?php }?>

          <label>User Name</label>
          <?php if (isset($_GET['uname'])) { ?>
               <input type="text"
                      name="uname"
                      placeholder="User Name"
                      value="<?php echo $_GET['uname']; ?>"><br>
          <?php }else{ ?>
               <input type="text"
                      name="uname"
                      placeholder="User Name"><br>
          <?php }?>


     	<label>Password</label>
     	<input type="password"
                 name="password"
                 placeholder="Password"><br>

          <label>Re Password</label>
          <input type="password"
                 name="re_password"
                 placeholder="Re_Password">

     	<button type="submit">Sign Up</button>
          <a href="sign.php" class="ca">Already have an account?</a>
				 </form>
				 <footer>
					 <div class="container">
						 <div class="row">
							 <div class="col-md-12">
								 <div class="inner-content">
									<p style="color:white;">Copyright © 2021 - Designed By: <a>Thunder Coders(NSTI - BHUBANESWAR)</a></p>
								 </div>
							 </div>
						 </div>
					 </div>
				 </footer>

</body>
</html>
