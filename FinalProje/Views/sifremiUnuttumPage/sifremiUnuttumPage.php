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
		<link rel="stylesheet" type="text/css" href="/FinalProje/Views/sifremiUnuttumPage/sifremiUnuttumPage.css">

		<title>MetVago</title>
	</head>
	<body class="background">
		<?php 
		require_once "../navBar/navbar.php";
		require_once "../GenelStyleSheet/genelStyleSheet.php";
		require_once "../../../FinalProje/ScriptSources/ortakKodlar/ortakKodlar.php";
		?>

		<div class="container pencere" style="height:100%;">
			<div class="card" style="background-color:rgba(220,220,220,0.9);">
				<div class="card-header text-center text-muted" style="font-size:24px;">
					Şifremi Unuttum
				</div>
				<div class="card-body">
					<form>
						<div class="row">
							<div class="col-lg-12" style="margin:auto;">
								<p class="text-muted text-center">Şifrenizi Tekrar Alabilmek İçin Mail Adresinizi Kullanabilir veya Güvenlik Sorunuzu Cevaplayabilirsiniz.</p>
							</div>

							<div class="col-lg-8 loginForm">
								<div class="mb-3">
									<div class="col-lg-12">
										<label for="kullaniciAdi" class="col-lg-2">Kullanıcı Adı<span style="color:green;">*</span></label>
										<input type="text" class="col-lg-6" id="kullaniciAdiInput">
									</div>
									<br><hr>
									<div class="col-lg-12">
										<label for="mailAdress" class="col-lg-2">Mail Adresi<span style="color:green;">*</span></label>
										<input type="text" class="col-lg-6" id="mailAdressInput">
									</div>
									<br><hr>
									<button type="submit" class="col-lg-3 btn btn-primary">Kullanıcı Ara</button>
								</div>
							</div>
						</div>
						
						
					</form>
				</div>
			</div>
		</div>
		



	</body>
	<footer>
	</footer>
	</html>