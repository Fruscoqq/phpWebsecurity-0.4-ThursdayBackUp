<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registration</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
	<link href="style.css" rel="stylesheet">
</head>

<body class="p-0 mb-2 bg-light">

			

	<!-- Navigation -->
  <?php
			if(isset($_SESSION['user_em'])){
				echo '<form action="logout.php" method="POST">
				<form action="insert.php" method="post">
	<nav class="navbar navbar-expand-md navbar-dark bg-primary sticky-top mb-5">
		<div class="container-fluid">
			<a class="navbar-brand text-uppercase ml-5" href="#">London tours</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse"
			data-target="#navbarResponsive">
			<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item active">
						<a href="#" class="nav-link">Home</a>
					</li>
					<li class="nav-item">
						<a href="#" class="nav-link">About</a>
					</li>
					<li class="nav-item">
						<a href="#" class="nav-link">Services</a>
					</li>
					<li class="nav-item">
          <a href="bookings.php" class="nav-link">Bookings</a>
					</li>
					<li class="nav-item mr-5">
					<button type="submit" class="btn btn-danger" name="logout">Logout</button>
					</li>
				</ul>
			</div>
		</div>
	</nav>';
			}
	else{
		echo '<form action="insert.php" method="post">
<nav class="navbar navbar-expand-md navbar-dark bg-primary sticky-top mb-5">
<div class="container-fluid">
	<a class="navbar-brand text-uppercase ml-5" href="#">London tours</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse"
	data-target="#navbarResponsive">
	<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="navbarResponsive">
		<ul class="navbar-nav ml-auto">
			<li class="nav-item active">
				<a href="#" class="nav-link">Home</a>
			</li>
			<li class="nav-item">
				<a href="#" class="nav-link">About</a>
			</li>
			<li class="nav-item">
				<a href="#" class="nav-link">Services</a>
			</li>
			<li class="nav-item">
				<a href="bookings.php" class="nav-link">Bookings</a>
			</li>
			<li class="nav-item mr-5">
			<a class="btn btn-success" href="loginhtml.html" role="button">Login</a>
			</li>
		</ul>
	</div>
</div>
</nav>';
	}
	?>

			</div>


	<!-- Registration forms-->
	<div id="secondary" class="p-3 mb-2 text-dark container">
	<div class="container-fluid">
		<p class="text-center text-uppercase h2">Registration </br> form</p>
	<form>
		<div class="form-group">
		  <label for="exampleInputEmail1">Username</label>
		  <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter username" name="username">
			  </div>
		<div class="form-group">
				<label for="exampleInputEmail1">Email address</label>
				<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email">
				<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
			 </div>
		<div class="form-group">
				<label for="exampleInputEmail1">Street name</label>
				<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter street name" name="street">
			 </div>
		<div class="form-group">
				<label for="exampleInputPassword1">City name</label>
				<input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter city name" name="city">
			 </div>
		 <div class="form-group">
				<label for="exampleInputPassword1">Postcode</label>
				<input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter postcode" name="postcode">
			 </div>

		<div class="form-group">
					<label for="exampleInputPassword1">Phone number</label>
					<input type="number" class="form-control" id="exampleInputPassword1" placeholder="Enter phone number" name="phonenumber">
			</div>
		<div class="form-group">
				<label for="exampleInputPassword1">Password</label>
				<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Enter your password" name="password">
			</div>

		<div class="form-group">
				<label for="exampleInputPassword1">Repeat Password</label>
				<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Repeat your password"  name="rpassword">
			</div>

		<button type="submit" class="btn btn-primary" name="submit-register">Sign up</button>

		
		
	  </form>
		</div>
	</div>


	
</body>

</html>