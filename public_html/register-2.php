<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Register</title>
	
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
		<div class="card mx-auto" style="width: 60%;">
		  <div class="card-body">
		    <form>
		      <div class="form-group">
			    <label for="name">Full Name</label>
			    <input type="text" class="form-control" name="name" id="name" placeholder="Enter Your Full Name">
			  </div>
			  <div class="form-group">
			    <label for="email">Email address</label>
			    <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" placeholder="Enter Your Enter email">
			    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
			  </div>
			  <div class="form-group">
			    <label for="username">Username</label>
			    <input type="text" class="form-control" name="username" id="username" placeholder="Enter Your Username">
			  </div>
			  <div class="form-group">
			    <label for="password">Password</label>
			    <input type="password" class="form-control" name="password" id="password" placeholder="Enter Your Password">
			  </div>
			  <div class="form-group">
			    <label for="conform_password">Conform Password</label>
			    <input type="password" class="form-control" name="conform_password" id="conform_password" placeholder="Conform Your Password">
			  </div>
			  <div class="form-group">
			    <label for="conform_password">Usertype</label>
			    <select name="usertype" id="usertype" class="form-control">
			    	<option value="1">Admin</option>
			    	<option value="0">Other</option>
			    </select>
			  </div>
			  <div class="form-group">
			  	<button class="btn btn-primary login-button" type="button"><i class="fa fa-user" aria-hidden="true"></i>&nbsp;Register</button>
			  	<span><a href="index.php">Login</a></span>
			  </div>
			</form>
		  </div>
		</div>
	</div>





</body>
</html>