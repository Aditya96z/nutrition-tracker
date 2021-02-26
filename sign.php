<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="assets/css/style_q.css">
</head>
<body>
     <form action="login.php" method="post">
     	<h2>LOGIN</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>User Name</label>
     	<input type="text" name="uname" placeholder="User Name"><br>

     	<label>Password</label>
     	<input type="password" name="password" placeholder="Password"><br>

     	<button type="submit">Login</button>
          <a href="signup.php" class="ca">Create an account</a>
     </form><br>
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
