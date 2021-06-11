<?
	session_start();
	include "koneksi.php";
	if (!isset($_SESSION['username'])) {
		header ("location:login.php");
	}
	
	if (isset($_SESSION ['username'])) {
		$username= $_SESSION['username'];
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset = "UTF-8">
	<meta http-equiv = "X-UA-Compatible" content = "IE = edge">
	<meta name = "viewport" content = "width = device-width, initial-scale = 1.0">
	<title>LAB PW4</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
	<link rel="stylesheet" href="style.css">
</head>

<body style="background-color: #ACB9CA">
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
				<li class="nav-item">
					<a class="nav-link" href="aksi_logout.php">Logout</a>
				</li>
			</ul>
			<form class="form-inline my-2 my-lg-0">
				<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" />
				<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
			</form>
		</div>
	</nav>
	
	<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
	  <ol class="carousel-indicators">
		<li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
		<li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
		<li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
	  </ol>
	  <div class="carousel-inner">
		<div class="carousel-item active">
		  <img src="4.jpg" class="d-block w-100" alt="...">
		  <div class="carousel-caption d-none d-md-block">
			<h5>First slide label</h5>
			<p>Some representative placeholder content for the first slide.</p>
		  </div>
		</div>
		<div class="carousel-item">
		  <img src="10.jpg" class="d-block w-100" alt="...">
		  <div class="carousel-caption d-none d-md-block">
			<h5>Second slide label</h5>
			<p>Some representative placeholder content for the second slide.</p>
		  </div>
		</div>
		<div class="carousel-item">
		  <img src="3.jpg" class="d-block w-100" alt="...">
		  <div class="carousel-caption d-none d-md-block">
			<h5>Third slide label</h5>
			<p>Some representative placeholder content for the third slide.</p>
		  </div>
		</div>
	  </div>
	  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
	  </a>
	  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
		<span class="carousel-control-next-icon" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
	  </a>
	</div>
	
	<div class="container">
		<div class="card-deck mt-4 mb-4">
		  <div class="card">
			<img src="16.jpg" class="card-img-top" alt="...">
			<div class="card-body">
			  <h5 class="card-title">Wedding</h5>
			  <p class="card-text">A wedding is a ceremony where two people are united in marriage. Wedding traditions and customs vary greatly between cultures, ethnic groups, religions, countries, and social classes.</p>
			  <p class="card-text1"><small class="text-muted">Last updated 3 mins ago</small></p>
			</div>
		  </div>
		  <div class="card">
			<img src="7.jpg" class="card-img-top" alt="...">
			<div class="card-body">
			  <h5 class="card-title">Florist</h5>
			  <p class="card-text">Floristry is the production, commerce, and trade in flowers. It encompasses flower care and handling, floral design, or flower arranging, merchandising, production, display and flower delivery.</p>
			  <p class="card-text1"><small class="text-muted">Last updated 3 mins ago</small></p>
			</div>
		  </div>
		  <div class="card">
			<img src="8.jpg" class="card-img-top" alt="...">
			<div class="card-body">
			  <h5 class="card-title">Honeymoon</h5>
			  <p class="card-text">A honeymoon is a holiday taken by newlyweds immediately after their wedding, to celebrate their marriage. Today, honeymoons are often celebrated in destinations considered exotic or romantic.</p>
			  <p class="card-text1"><small class="text-muted">Last updated 3 mins ago</small></p>
			</div>
		  </div>
		</div>
	</div>

	<!

	<div class="container">
		<table class = "table table-striped table-dark mb-4">
			<thead>
				<tr>
					<th>No</th>
					<th>Nama</th>
					<th>NIM</th>
					<th>KOM</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>1</td>
					<td>Sukiya</td>
					<td>201401068</td>
					<td>B</td>
				</tr>
				<tr>
					<td>2</td>
					<td>Haha</td>
					<td>201401***</td>
					<td>*</td>
				</tr>
			</tbody>
		</table>
	</div>
	
	<div class="container">
		<div class="embed-responsive embed-responsive-16by9">
		  <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3982.0364753746676!2d98.65956321426003!3d3.579092897395441!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3031302aeb8d51eb%3A0x49392efb899c1690!2sRiso%2023!5e0!3m2!1sid!2sid!4v1619931427967!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen></iframe>
		</div>
	</div>
	
	<footer class="text-center">
		<img src="19.png" alt="logo" width = "170px" height = "170px"">
	</footer>
	
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>
</html>