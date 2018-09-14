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
	<link rel="stylesheet" media="screen" href="includes/clock/css/main.css"/>

	<!--JS-->
	<!-- Bootstrap -->
	<script src="js/jquery.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<!-- Clock JS -->
	<script language="javascript" type="text/javascript" src="includes/clock/js/jquery.thooClock.js"></script>
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
		    <form id="register_form" onsubmit="return false" autocomplete="off">
		      <div class="form-group">
			    <label for="fullName">Full Name</label>
			    <input type="text" class="form-control" name="fullName" id="fullName" placeholder="Enter Your Full Name">
			    <small id="fn_error" class="form-text text-muted"></small>
			  </div>
			  <div class="form-group">
			    <label for="email">Email address</label>
			    <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" placeholder="Enter Your Enter email">
			    <small id="e_error" class="form-text text-muted">We'll never share your email with anyone else.</small>
			  </div>
			  <div class="form-group">
			    <label for="username">Username</label>
			    <input type="text" class="form-control" name="username" id="username" placeholder="Enter Your Username">
			    <small id="u_error" class="form-text text-muted"></small>
			  </div>
			  <div class="form-group">
			    <label for="password">Password</label>
			    <input type="password" class="form-control" name="password" id="password" placeholder="Enter Your Password">
			    <small id="p1_error" class="form-text text-muted"></small>
			  </div>
			  <div class="form-group">
			    <label for="password2">Conform Password</label>
			    <input type="password" class="form-control" name="password2" id="password2" placeholder="Conform Your Password">
			    <small id="p2_error" class="form-text text-muted"></small>
			  </div>
			  <div class="form-group">
			    <label for="usertype">Usertype</label>
			    <select name="usertype" id="usertype" class="form-control">
			    	<option value="">Choose User Type</option>
			    	<option value="1">Admin</option>
			    	<option value="0">Other</option>
			    </select>
			    <small id="t_error" class="form-text text-muted"></small>
			  </div>
			  <div class="form-group">
			  	<button class="btn btn-primary login-button" type="submit"><i class="fa fa-user" aria-hidden="true"></i>&nbsp;Register</button>
			  	<span><a href="index.php">Login</a></span>
			  </div>
			</form>
		  </div>
		</div>
	</div>





</body>
</html>