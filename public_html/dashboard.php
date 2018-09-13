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
		<div class="row">
			<div class="col-md-4">
				<div class="card mx-auto">
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
	<p></p>
	<p></p>
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<div class="card">
			      <div class="card-body">
			        <h5 class="card-title">Categories</h5>
			        <p class="card-text">Here you can manage categories and add new parent and sub categories</p>
			        <a href="#" data-toggle="modal" data-target="#form_categories" class="btn btn-primary">Add</a>
			        <a href="#" class="btn btn-primary">Manage</a>
			      </div>
			    </div>
			</div>
			<div class="col-md-4">
				<div class="card">
			      <div class="card-body">
			        <h5 class="card-title">Brands</h5>
			        <p class="card-text">Here you can manage brands and add new brands</p>
			        <a href="#" data-toggle="modal" data-target="#form_brands" class="btn btn-primary">Add</a>
			        <a href="#" class="btn btn-primary">Manage</a>
			      </div>
			    </div>
			</div>
			<div class="col-md-4">
				<div class="card">
			      <div class="card-body">
			        <h5 class="card-title">Products</h5>
			        <p class="card-text">Here you can manage products and add new products</p>
			        <a href="#" data-toggle="modal" data-target="#form_products" class="btn btn-primary">Add</a>
			        <a href="#" class="btn btn-primary">Manage</a>
			      </div>
			    </div>
			</div>
		</div>
	</div>

	<?php 
	// Categories Form
	include_once('./templates/categories.php');
	// Brands Form
	include_once('./templates/brands.php');
	// Products Form
	include_once('./templates/products.php');
	?>





</body>
</html>