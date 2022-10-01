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
		<link rel="stylesheet" type="text/css" href="/FinalProje/Views/otellerPage/otellerPage.css">

		<title>MetVago</title>
	</head>
	<body class="background">
		<?php 
		require_once "../navBar/navbar.php";
		require_once "../GenelStyleSheet/genelStyleSheet.php";
		require_once "../../ScriptSources/ortakKodlar/ortakKodlar.php";
		?>
		<div class="container">

			<div class="card text-center" style="background:transparent; margin-top: 20px;">
	<!-- 			<div class="card-header">
					Filtreler
				</div> -->
				<div class="card-body" style="background-color:rgba(220,220,220,0.4);">		
					<h5 class="card-title">Filtreler</h5>
					<hr>
					<div class="row">
						<div class="col-lg-4" style="font-size:24px;">
							<br>
							<select class="form-select" aria-label="Default select example">
								<option selected disabled>Kişi Sayısını Seçiniz.</option>
								<option value="1">One</option>
								<option value="2">Two</option>
								<option value="3">Three</option>
							</select><br><hr>
							<div class="input-group mb-3">
								<span class="input-group-text">Başlangıç:</span>
								<input type="date" class="form-control" placeholder="Username" aria-label="Username">
								<span class="input-group-text">Bitiş:</span>
								<input type="date" class="form-control" placeholder="Server" aria-label="Server">
							</div>
<!-- 							<select class="form-select" aria-label="Default select example">
								<option selected>Seçiniz</option>
								<option value="1">One</option>
								<option value="2">Two</option>
								<option value="3">Three</option>
							</select><br><hr> -->
							<br>
						</div>						
						<div class="col-lg-4" style="font-size:24px;">
							<br>
							<div class="form-check">
								<input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
								<label class="form-check-label" for="exampleRadios1">
									Daire &nbsp;
								</label><br><hr>
							</div>
							<div class="form-check">
								<input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
								<label class="form-check-label" for="exampleRadios1">
									Otel Odası &nbsp;
								</label><br><hr>
							</div>
							<div class="form-check form-switch">
								<input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
								<label class="form-check-label" for="flexSwitchCheckDefault">Sadece Boş Olanlar</label>
							</div>
							<br>
						</div>						
						<div class="col-lg-4" style="font-size:24px;">
							<div class="mb-3">
								<label for="sehirInput" class="form-label">Şehir Giriniz</label>
								<input type="text" class="form-control" id="sehirInput" placeholder="Ankara">
							</div><hr>
							<div class="mb-3">
								<label for="ilceInput" class="form-label">İlçe Giriniz</label>
								<input type="text" class="form-control" id="ilceInput" placeholder="Etimesgut">
							</div>
							<a href="#" class="btn btn-success">Otel Ara</a>
						</div>
					</div>
					<hr>
					<p class="card-text text-muted unselectable">Yapmak İstediğiniz Tatilin Özelliklerini
					Siz Söyleyin Gerisini Biz Halledelim</p>
				<!-- 	<a href="#" class="btn btn-primary">Go somewhere</a>
				-->				
			</div>
		</div>

		<div class="card" style="background:transparent; margin-top: 50px;">
			<div class="card-body" style="background-color:rgba(220,220,220,0.4);">		
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
									<p class="card-text"><?php echo rastgeleYazdir(2); ?></p>
									<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
								</div>
								
								<div class="col-lg-3" style="justify-content: center;align-items: center; ">
									<div style="margin-top: 50%; margin-bottom: 50%; justify-content: center;">
										<a href="#" class="btn btn-success col-lg-12" style="width:auto; height: auto; font-size: 20px; 
										text-align: center;">Rezervasyon Yap</a><br><br>
										<a href="#" class="btn btn-success col-lg-12" style="width:auto; height: auto; font-size: 20px;
										text-align: center;">İncele</a>
									</div>

								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<hr>

		</div>








<!-- 		<div class="container" style="background:transparent;">
			<div name="Filtreler" class="row divBackground card-body" style="margin-top:20px;">
				<h1 class="col-lg-12" style="text-align: center;">Filtreler</h1><br><br><br>
				<div class="col-lg-4">a</div>
				<div class="col-lg-4">b</div>
				<div class="col-lg-4">c</div>
			</div>
			<br><hr>
			<div class="row divBackground" style="margin-top:20">
				<div name="Filtreler" class="row" style="margin-top:20px;">
					<h1 class="col-lg-12" style="text-align: center;">OTELLER</h1>
					<div class="col-lg-4">OTEL DETAY</div>
				</div>
			</div>
		</div> -->
		<!-- 					<div class="row">
						<div class="col-lg-4">
							<p><?//php echo rastgeleYazdir(1); ?></p><br><a href="#" class="btn btn-primary">Go somewhere</a>
						</div>						
						<div class="col-lg-8">
							<p><?//php echo rastgeleYazdir(1); ?></p><br><a href="#" class="btn btn-primary">Go somewhere</a>
						</div>						
					</div> -->
				</body>
				<footer>
				</footer>
				</html>