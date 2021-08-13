<?php
	include_once('controller/API.php');

	$apiObj = new API();
	
	$res = "";
	$video = "";
	if (isset($_GET['find'])) {
		$judul = $_GET['title'];
		$data = $apiObj->searchTitle($judul);
		$id = $data["Search"][0]["imdbID"];
		$res = $apiObj->getDetail($id);
		$yt = $apiObj->searchYoutube($judul);
		$video = $yt["items"];
	}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>First API App</title>

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
      integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="style/style.css" />
  </head>
  <body>

<!--Navbar-->
<nav class="navbar navbar-expand-md navbar-light bg-light sticky-top" id="topSection">
	<div class="container-fluid">
	<a class="navbar-brand">
		<img src="https://img.icons8.com/cute-clipart/36/000000/search.png"/>
		FilmLookUp
	</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="navbarResponsive">
		<ul class="navbar-nav ml-auto">
		<?php
			if (isset($judul)) {
		?>
		<li class="nav-item">
			<a class="nav-link" href="index.php">Home</a>
		</li>
		<li class="nav-item">
			<a class="nav-link active" href="#">LookUp!</a>
		</li>
		<!--
		<li class="nav-item">
			<a class="nav-link" href="https://tugas2.dafarizky113.my.id">College Stuff</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="misc.html">Misc</a>
		</li>
		-->
		<li class="nav-item">
			<a class="nav-link disabled" href="#">Soon!</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="#">About</a>
		</li>
		<?php }else { ?>
		<li class="nav-item">
			<a class="nav-link active" href="#">Home</a>
		</li>
		<li class="nav-item">
			<a class="nav-link disabled" href="#">LookUp!</a>
		</li>
		<!--
		<li class="nav-item">
			<a class="nav-link" href="https://tugas2.dafarizky113.my.id">College Stuff</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="misc.html">Misc</a>
		</li>
		-->
		<li class="nav-item">
			<a class="nav-link disabled" href="#">Soon!</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="#">About</a>
		</li>
		<?php } ?>
		</ul>
	</div>
	</div>
</nav>

<?php
	if (isset($judul)) {
		include_once('contents/detail.php');
	}else {
		include_once('contents/home.php');
	}
?>

<!--- Connect -->
<div class="container-fluid padding">
	<div class="row text-center padding">
	<div class="col-12">
		<h2>Connect</h2>
	</div>
	<div class="col-12 social padding">
		<a href="https://web.facebook.com/dafa.rizky.1232/" target="_blank" data-aos="zoom-in" data-aos-duration="1000"
		><i class="fab fa-facebook"></i
		></a>
		<a href="https://github.com/dafalagi" target="_blank" data-aos="zoom-in" data-aos-duration="1500"><i class="fab fa-github"></i></a>
		<a href="https://www.instagram.com/dafaa.r/" target="_blank" data-aos="zoom-in" data-aos-duration="2000"
		><i class="fab fa-instagram"></i
		></a>
	</div>
	</div>
</div>

<!--Back to top-->
<button type="button" class="btn btn-floating btn-lg smooth-scroll" id="btn-back-to-top">
	<i class="fas fa-arrow-up"></i>
</button>

<!--- Footer -->
<footer>
	<div class="container-fluid padding">
	<div class="row text-center">
		<div class="col-12">
		<h4>AntafunnyCode</h4>
		<hr class="light" />
		<p>
			<a href="https://wa.link/ol6emf" target="_blank"
			><img src="https://img.icons8.com/office/24/000000/whatsapp.png" /> +62 838-2043-4665</a
			>
		</p>
		<p>
			<img src="https://img.icons8.com/ultraviolet/24/000000/phone-disconnected.png" />
			+62 819-0596-6251
		</p>
		<p>
			<img src="https://img.icons8.com/color/24/000000/gmail-new.png" />
			dafarizky34@gmail.com
		</p>
		<p>Bandung, West Java, Indonesia</p>
		</div>
	</div>
	</div>
</footer>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script
	src="https://code.jquery.com/jquery-3.2.1.js"
	integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
	crossorigin="anonymous"
></script>
<script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js"></script>
<script
	src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
	integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns"
	crossorigin="anonymous"
></script>
<script type="text/javascript" src="js/aos_init.js"></script>
<script type="text/javascript" src="js/back_top.js"></script>

</body>
</html>

