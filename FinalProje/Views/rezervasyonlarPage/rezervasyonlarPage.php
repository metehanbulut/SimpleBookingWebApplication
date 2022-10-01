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
		<link rel="stylesheet" type="text/css" href="/FinalProje/Views/GenelStyleSheet/genelStyleSheet.css">
		<link rel="icon" type="image/x-icon" href="../../Resources/Images/TitleLogos/hotel-96.png">
		<link rel="stylesheet" type="text/css" href="/FinalProje/Views/rezervasyonlarPage/rezervasyonlarPage.css">

		<title>MetVago</title>
	</head>
	<body class="background">
		<?php 
		require_once "../navBar/navbar.php";
		require_once "../GenelStyleSheet/genelStyleSheet.php";
		require_once "../../ScriptSources/ortakKodlar/ortakKodlar.php";
		?>
		<div class="container">

			<div class="card" style="background:transparent; margin-top: 50px;">
				<div class="card-body" style="background-color:rgba(220,220,220,0.4);">	
					<h5 class="text-center text-muted">Rezervasyonlar</h5>	
					<div class="card mb-3 cardBackGround" style="width: 100%;">
						<div class="row g-0">
							<div class="col-lg-4 imageDiv">
								<img src="/FinalProje/Resources/Images/HotelOutSides/HotelLevni.jpg" 
								class="img-fluid rounded-start cardFotoClass" alt="LevniLogo">
							</div>
							<div class="col-lg-8">
								<div class="card-body row">
									<div class="col-lg-9">
										<h5 class="card-title text-center">Hotel Levni</h5>
										<label class="text-muted">Rezervasyon Tarihi:  <?php echo"10/10/2022" ?></label>
										<br><hr>
										<p class="card-text"><?php echo rastgeleYazdir(1); ?></p>
										<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
									</div>

									<div class="col-lg-3" style="justify-content: center;align-items: center; ">
										<div style="margin-top: 50%; margin-bottom: 50%; justify-content: center;">
											<a href="#" class="btn btn-danger col-lg-12" style="width:auto; height: auto; font-size: 20px; 
											text-align: center;">Rezervasyon Düzenle</a><br><br>
										</div>

									</div>
								</div>
							</div>
						</div>
					</div>
					<hr>
					<p class="text-muted text-center"> Rezervasyon Detayları</p>
				</div>


			</div>

		</body>
		<footer>
		</footer>
		</html>