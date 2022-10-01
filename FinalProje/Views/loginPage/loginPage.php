<!doctype html>
	<html>
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="/FinalProje/Views/GenelStyleSheet/genelStyleSheet.css">
		<link rel="icon" type="image/x-icon" href="../../Resources/Images/TitleLogos/hotel-96.png">
		<link rel="stylesheet" type="text/css" href="loginPage.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.css" />
		<link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@200&display=swap" rel="stylesheet" />


		<title>MetVago</title>
	</head>
	<body class="background sizeController"->
		<?php 
		session_start();
		require_once "../navBar/navbar.php";
		require_once "../GenelStyleSheet/genelStyleSheet.php";
		require_once "../../Controllers/loginController.php";
		require_once "../../ScriptSources/ortakKodlar/ortakKodlar.php";
		if(isset($_GET['islemBasarili']))
		{
			$_GET['islemBasarili'];
			$girisDogru=$_GET['islemBasarili'];
		}
		else
		{
			$girisDogru=-1;
		}
		if(isset($_GET['oturumKapat']))
		{
			$_GET['oturumKapat'];
			$oturumKapat=$_GET['oturumKapat'];
			unset($_SESSION['kullaniciBilgileri']);
			unset($_SESSION['kullaniciYetkileri']);
			header("Location:/FinalProje/Views/loginPage/loginPage.php");
			exit;
		}
		else
		{
			$oturumKapat=-1;
		}

		?>
		<div class="arkaPanel">
			<div class="loginOutside">
				<div class="loginInside">
					<p class="yaziGolgeli unselectable" style="text-align: center; font-size: 32px; color: white; margin-top: 10%;" enabled="false">MetVago Otel <br>Rezervasyon Sistemi</p>	
					<form action="/FinalProje/Controllers/loginController.php" method="POST">
						<div class="row yaziGolgeli" style=" color:white; font-size: 24px; margin-left: 10%;margin-right: 10%;margin-bottom: 10%; ">
							<br><hr><br>
							<div class="col-lg-12">
								<br>
								<label class="col-lg-4">Kullanıcı Adı:</label>
								<input type="text" class="col-lg-7 inputClass" name="userName">
							</div><br><br><br>
							<div class="col-lg-12">

								<label class="col-lg-4">Parola:</label>
								<input type="password" class="col-lg-7 inputClass" name="password">
							</div><br>
							<?php 
							if($girisDogru==0)
							{
								echo"<div class='form-text text-center unselectable' style='color:red; font-size:14px;'>Kullanıcı Adı Veya Şifre Hatalı.</div>";
							}?>
							
							<div class="col-lg-12">	
								<br>	

								<button type="submit" style="font-weight: bold; width:100%" class="slide" name="loginButton">
									<div>Giriş</div>
									<i class="icon-arrow-right"></i>
								</button>

							</div>
							<br>

							<br><br><hr><br>
							<div class="row" style="justify-content: end;">
								<div class="col-lg-4">
									<button type="button" style="font-weight: bold;" class="slide" 
									onclick="window.location.href='../kayitOlPage/kayitOlPage.php'">
									<div>Kayıt Ol</div>
									<i class="icon-arrow-right"></i>
								</button>
							</div>
							<div class="col-lg-7">
								<button type="button" style="font-weight: bold;" class="slide"
								onclick="window.location.href='../sifremiUnuttumPage/sifremiUnuttumPage.php'">
								<div>Şifremi Unuttum</div>
								<i class="fas fa-solid fa-question"></i>
							</button>
						</div>
					</div>

				</div>
			</form>
		</div>
	</div>



</body>
<footer>
</footer>
</html>


<br>
