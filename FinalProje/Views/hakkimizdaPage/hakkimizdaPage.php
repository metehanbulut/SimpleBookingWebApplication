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

		<title>MetVago</title>
	</head>
	<body class="background genislet">
		<?php 
		require_once "../navBar/navbar.php";
		require_once "../GenelStyleSheet/genelStyleSheet.php";
		require_once "../../ScriptSources/ortakKodlar/ortakKodlar.php";
		?>
		<div class="container">
			<div class="card text-center" style="background:transparent;">
<!-- 				<div class="card-header">
					MetVago Rezervasyon Sistemleri Hakkında
				</div> -->
				<div class="card-body" style="background-color:rgba(220,220,220,0.4);">		
					<img src="../../Resources/Images/HakkimizdaLogo/MetVago.png" class="card-img-center" style="width:75%; max-width: 320px;
					max-height:320px; opacity: 100%;" alt="metVago Logo">
					<br><br>
					<h5 class="card-title">Bir Yazılım Serüveni</h5>
					<hr>
					<p class="card-text"><?php echo rastgeleYazdir(25) ?></p>
				<!-- 	<a href="#" class="btn btn-primary">Go somewhere</a>
				-->					<div class="card-footer text-muted">
					Tüm Hakları Saklıdır.  174410040 Metehan Bulut / Copyright © 2022
				</div>
			</div>
		</div>




	</div>

</body>
<footer>
</footer>
</html>