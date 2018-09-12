<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Stock Management System</title>
	<script src="js/jquery.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" media="screen" href="includes/css/main.css"/>
	<script language="javascript" type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script> 
	<script language="javascript" type="text/javascript" src="includes/js/jquery.thooClock.js"></script>
	<script src="js/main.js"></script>
</head>
<body>
	
	<!-- Navbar -->
	<?php include_once("./templates/header.php");?>
	<br>
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<div class="card mx-auto" style="width: 20rem;">
				  <img class="card-img-top mx-auto" style="width: 60%;" src="./images/user.png" alt="User">
				  <div class="card-body">
				    <h5 class="card-title">Profile Info</h5>
				    <p class="card-text">Jayesh</p>
				    <p class="card-text">Admin</p>
				    <p class="card-text">Last Login : xxxx-xx-xx</p>
				    <a href="#" class="btn btn-primary"><i class="fa fa-user">&nbsp;</i>Edit Profile</a>
				  </div>
				</div>
			</div>
			<div class="col-md-8">
				<div class="jumbotron" style="width: 100%;height: 100%;">
					<h1>Welcome Admin,</h1>
					<div class="row">
						<div class="col-sm-6">
							<!-- <iframe src="http://free.timeanddate.com/clock/i6eutfzq/n438/szw110/szh110/cf100/hnce1ead6" frameborder="0" width="110" height="110"></iframe> -->
							<?php include_once("./includes/clock.php");?>
						</div>
						<div class="col-sm-6">
							<div class="card">
						      <div class="card-body">
						        <h5 class="card-title">New Orders</h5>
						        <p class="card-text">Here you can creat invoices and create new orders</p>
						        <a href="#" class="btn btn-primary">New Orders</a>
						      </div>
						    </div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


</body>
</html>