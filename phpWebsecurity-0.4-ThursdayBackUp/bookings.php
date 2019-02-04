<?php
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link href="style.css" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Bookings</title>
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
						<a href="index.php" class="nav-link">Home</a>
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
	</nav>
	</form>
	</form>';
			}
	else{
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
				<a href="index.php" class="nav-link">Home</a>
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
</nav>
</form>
</form>';
	}
	?>
	
	

	<!-- Table -->
		<div id="date-form">
		<h1 class="display-4 text-center">Please select </br> the date<p class="display-4">from below</p></h1>
    <form action="dbBookings.php" method="post">
		<!-- <input type="text" placeholder="Insert date" name="bname"> -->
		<input id="bdate" type="date" placeholder="Enter date" name="blocation" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
		</br>
		<button type="submit" name="bsubmit" class="btn btn-info w-25" style="display: table; margin: 0 auto;">Submit</button> 
		</form>
	</div>
    
    
    
    
    
    
    
    
    
    
    </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>