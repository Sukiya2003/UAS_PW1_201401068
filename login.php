<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE = edge" />
	<meta name="viewport" content="width = device-width, initial-scale = 1.0" />
	<title>LAB PW4</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous" />
	<link rel="stylesheet" href="style.css" />
</head>

<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-#ACB9CA">
		<a class="navbar-brand" href="#">DANDELION</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item active">
					<a class="nav-link" href="index.php">Home<span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="login.php">Login</a>
				</li>
			</ul>
			<form class="form-inline my-2 my-lg-0">
				<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" />
				<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
			</form>
		</div>
	</nav>
	
	<!--Form start-->
	<div class="container" style = "margin-top: 70px">
		<h2>LOGIN HERE</h2>
		<form action="aksi_login.php" method="POST">
			<div class="form-group">
				<label for="username">Username</label>
				<input type="username" name="username" class="form-control" id="username" placeholder="Enter Your Username" name="username" />
			</div>
			<div class="form-group">
				<label for="pwd">Password</label>
				<input type="password" name="password" class="form-control" id="pwd" placeholder="Enter Your Password" name="pwd" />
			</div>
			<div class="checkbox">
				<label><input type="checkbox" name="remember" /> Remember me</label>
			</div>
			<button type="submit" class="btn btn-primary" id="submit" onclick="login()">SUBMIT</button>
		</form>
	</div>
	<!--Form end-->

	<footer style="background-color: #acb9ca" class="text-center fixed-bottom"><img src="19.png" alt="logo" width = "120px" height = "120px""></footer>

	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
	<!-- <script src="uts.js"></script> -->
</body>
</html>