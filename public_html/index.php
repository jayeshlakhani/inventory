<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Stock Management System</title>
	
	<!-- Bootstrap -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- Style CSS -->
	<link rel="stylesheet" href="css/style.css">
	<!-- Clock CSS -->
	<link rel="stylesheet" media="screen" href="includes/css/main.css"/>

	<!--JS-->
	<!-- Bootstrap -->
	<script src="js/jquery.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<!-- Clock JS -->
	<script language="javascript" type="text/javascript" src="includes/js/jquery.thooClock.js"></script>
	<!-- Main JS -->
	<script src="js/main.js"></script>

</head>
<body>
	<!-- Navbar -->
	<?php include_once("./templates/header.php");?>
	<br>
	<div class="container">
			<div class="card mx-auto" style="width: 18rem;">
		  <img class="card-img-top mx-auto" style="width: 60%;" src="./images/login.png" alt="Login Icon">
		  <div class="card-body">
		    <form>
			  <div class="form-group">
			    <label for="exampleInputEmail1">Email address</label>
			    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
			    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
			  </div>
			  <div class="form-group">
			    <label for="exampleInputPassword1">Password</label>
			    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
			  </div>
			  <div class="form-check">
			    <input type="checkbox" class="form-check-input" id="exampleCheck1">
			    <label class="form-check-label" for="exampleCheck1">Check me out</label>
			  </div>
			  <button type="submit" class="btn btn-primary"><i class="fa fa-lock">&nbsp;</i>Log In</button>
			  <span><a href="register-2.php">Register</a></span>
			</form>
		  </div>
		  <div class="card-footer"><a href="#">Forget Passwor ?</a></div>
		</div>
	</div>


</body>
</html>