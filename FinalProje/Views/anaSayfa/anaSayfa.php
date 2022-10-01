<?php 
if (session_status() == PHP_SESSION_NONE) {
	session_start();
} ?>
<!doctype html>
	<html>
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="anaSayfa.css">
		<link rel="stylesheet" type="text/css" href="/FinalProje/Views/GenelStyleSheet/genelStyleSheet.css">
		<link rel="icon" type="image/x-icon" href="../../Resources/Images/TitleLogos/hotel-96.png">

		<title>MetVago</title>
	</head>
	<body class="background">
		<?php 
		require_once "../navBar/navbar.php";
		require_once "../GenelStyleSheet/genelStyleSheet.php";
		require_once "../../../FinalProje/ScriptSources/ortakKodlar/ortakKodlar.php";
		
		$kullaniciYetkileri=null;
		if(isset($_SESSION['kullaniciBilgileri']))
			$kullaniciYetkileri=$_SESSION['kullaniciYetkileri'];
		?>
		<div class="col-lg-12">
			<br><nr>
				<div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
					<div class="carousel-indicators">
						<button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
						<button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
						<button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
					</div>
					<div class="carousel-inner"role="listbox" style=" width:100%; height: 100%; !important;">
						<div class="carousel-item active" data-bs-interval="10000">
							<img src="/FinalProje/Resources/Images/HotelOutSides/HotelLevni.jpg" class="d-block w-100" style="display:none" alt="...">
							<div class="carousel-caption d-none d-md-block">
								<h5 style="font-weight: bolder; color:white;">Hotel Levni</h5>
								<p>Some representative placeholder content for the first slide.</p>
							</div>
						</div>
						<div class="carousel-item" data-bs-interval="2000">
							<img src="/FinalProje/Resources/Images/HotelOutSides/HotelPalas.jpg" class="d-block w-100 " style="display:none"alt="...">
							<div class="carousel-caption d-none d-md-block">
								<h5 style="font-weight: bolder; color:white;">Hotel Palas</h5>
								<p>Some representative placeholder content for the first slide.</p>
							</div>
						</div>
						<div class="carousel-item">
							<img src="/FinalProje/Resources/Images/HotelOutSides/HotelNeptun.jpg" class="d-block w-100"style="display:none" alt="...">
							<div class="carousel-caption d-none d-md-block">
								<h5 style="font-weight: bolder; color:white;">Hotel Neptün</h5>
								<p>Some representative placeholder content for the first slide.</p>
							</div>
						</div>
					</div>
					<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="visually-hidden">Previous</span>
					</button>
					<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="visually-hidden">Next</span>
					</button>
				</div>

			</div>
			<div class="container">
				<br><br><br><hr>
				<p><?php echo rastgeleYazdir(7); ?></p>
			</div>

		</body>
		<footer>
			<div class="col-lg-12 text-center text-muted unselectable" style="background-color: black;">
				<p>Metehan Bulut 174410040 Tüm Hakları Saklıdır #5386260658</p>
			</div>
		</footer>
		</html>