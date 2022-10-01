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
		<link rel="stylesheet" type="text/css" href="/FinalProje/Views/kayitOlPage/kayitOlPage.css">

		<title>MetVago</title>
	</head>
	<body class="background">
		<?php 
		require_once "../navBar/navbar.php";
		require_once "../GenelStyleSheet/genelStyleSheet.php";
		require_once "../../../FinalProje/ScriptSources/ortakKodlar/ortakKodlar.php";
		require_once "../../../FinalProje/Controllers/kayitOlPageController.php";
		require_once "../../../FinalProje/DatabaseOperations/Connect/veritabaniBaglantisi.php";
		?>

		<div class="container">
			<div class="card" style="background-color:rgba(220,220,220,0.9);">
				<div class="card-header text-center text-muted" style="font-size:24px;">
					Ücretsiz Kayıt Ol
				</div>
				<div class="card-body">
					<form action="/FinalProje/DatabaseOperations/Crud/create.php" method="POST">
						<div class="row">
							<div class="col-lg-12" style="margin:auto;">
								<p class="text-muted"><?php echo rastgeleYazdir(2); ?></p>
							</div>
							<div class="col-lg-8 loginForm">
								<div class="mb-3">
									<label for="kullaniciAdi" class="form-label">Kullanıcı Adı<span style="color:red">*</span></label>
									<input name="kullaniciAdi" type="text" class="form-control" id="kullaniciAdiInput" aria-describedby="kullaniciAdiHelp">
									<div id="kullaniciAdiHelp" class="form-text">Kullanıcı adı alındıktan sonra değiştirilemez.</div>
									<br>
									<label for="mailAdress" class="form-label">Mail Adresi<span style="color:red">*</span></label>
									<input name="mailAdress" type="text" class="form-control" id="mailAdressInput" aria-describedby="mailAdressHelp">
									<div id="mailAdressHelp" class="form-text">@outlook @hotmail @gmail vb.</div>
									<br>
									<label for="password" class="form-label">Parola<span style="color:red">*</span></label>
									<input name="password" type="password" class="form-control" id="passwordInput" aria-describedby="passwordHelp">
									<div id="passwordHelp" class="form-text">8-12 Karakter Aralığında Bir Parola Belirleyiniz.</div>
									<br>
									<label for="passwordTekrar" class="form-label">Parola Tekrar<span style="color:red">*</span></label>
									<input name="passwordTekrar" type="password" class="form-control" id="passwordTekrarInput" aria-describedby="passwordTekrarHelp">
									<div id="passwordTekrarHelp" class="form-text">Parolanızı Tekrar Girin.</div>
									<br>
									<label  for="ad" class="form-label">Ad</label>
									<input name="ad" type="text" class="form-control" id="adInput">
									<br>
									<label for="soyad" class="form-label">Soyad</label>
									<input  name="soyad" type="text" class="form-control" id="soyadInput">
									<br>
									<label for="guvSorusu" class="form-label">Güvenlik Sorusu Seçiniz.<span style="color:red">*</span></label>
									<select name="guvenlikSorusu" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
										<option selected disabled>Soru Seçiniz</option>
										<?php
										$result=guvSorulariCek();
										for ($i=0; $i < count($result); $i++) { 
											echo "<option value="?><?php echo ($result[$i]["id"])."'>";echo $result[$i]["soru"].$result[$i]["id"]."</option>";}?>
										</select>
										<div id="guvSorusuHelp" class="form-text">Cevabını Hatırlayacağınız Size Özel Bir Soru Seçiniz.</div>
										<br>
										<label for="guvCevap" class="form-label">Güvenlik Sorusu Cevabınızı Yazınız.<span style="color:red">*</span></label>
										<input name="guvCevap" type="text" class="form-control" id="guvCevapInput" aria-describedby="guvCevapHelp">
										<div id="guvCevapHelp" class="form-text">Büyük Küçük Harf Önemsizdir fakat Türkçe Karakter Kullanmamaya Özen Gösteriniz.</div>
										<br>
										<div class="mb-3 form-check">
											<input name="onayCheck" type="checkbox" class="form-check-input" id="onayCheck">
											<label class="form-check-label" for="onayCheck">Kullanım Koşullarını ve Şartlarını Kabul Ediyorum.</label>
										</div>
										<label style="color:red">*</label>&nbsp;<label class="text-muted">ile İşaretli Alanlar Zorunludur.</label><br><br>
										<button type="submit" class="btn btn-primary" name="kayitOlPage">Kayıt Ol</button>
									</div>
								</div>
							</div>
						</form>

					</body>
					<footer>
					</footer>
					</html>