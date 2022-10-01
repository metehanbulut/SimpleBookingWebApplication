<?php 
if (session_status() == PHP_SESSION_NONE) {
    session_start();
} ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../navbar/navbar.css">
	<?php 
	require_once "../GenelStyleSheet/genelStyleSheet.php"; ?>
	<title></title>
</head>
<body>
	<?php 
	$kullaniciYetkileri=null;
	if(isset($_SESSION['kullaniciBilgileri']))
		$kullaniciYetkileri=$_SESSION['kullaniciYetkileri'];
	?> 

	<nav class="navbar navbar-expand-md navbar-dark " id="navbarOzel">
		<div class="collapse navbar-collapse container-fluid" id="navbarSupportedContent">

			<a class="animate navbar-brand" href="../anaSayfa/anaSayfa.php">
				<i class="fas fa-hotel"></i>
				&nbsp;&nbsp;
				MetVago
			</a>

			<ul class="navbar-nav">
				<?php 
				if(isset($_SESSION['kullaniciYetkileri'][0]))
				{
					if(in_array("Administrator_yetkisi", $_SESSION['kullaniciYetkileri'][0]))
					{
						echo "<li class=\"nav-item\">
						<a class=\"nav-link\" href=\"../yonetimPaneliPage/yonetimPaneliPage.php\">Yönetim Paneli</a>
						</li>" ;	
					}
				}
				?>
				<li class="nav-item">
					<a class="nav-link" href="../rezervasyonlarPage/rezervasyonlarPage.php">Rezervasyonlar</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="../otellerPage/otellerPage.php">Oteller</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="../hakkimizdaPage/hakkimizdaPage.php">Hakkımızda</a>
				</li>
				&nbsp;
				<li style="align-self:center">
					<form class="form-inline" >

						<?php 
						if(isset($_SESSION['kullaniciBilgileri']))
						{
							if($_SESSION['kullaniciBilgileri'])
							{
								echo "<button class=\"btn btn-sm btn-outline-secondary navbarbutonu\" type=\"button\"><span class=\"\" 
								onclick=\"window.location.href='../loginPage/loginPage.php?oturumKapat=1'\">Çıkış Yap</span></button>";
							}
							else
							{
								echo "<button class=\"btn btn-sm btn-outline-secondary navbarbutonu\" type=\"button\"><span class=\"degisenYazi\" 
								onclick=\"window.location.href='../loginPage/loginPage.php'\">Giriş Yap</span></button>";
							}
						}
						else
						{
							echo "<button class=\"btn btn-sm btn-outline-secondary navbarbutonu\" type=\"button\"><span class=\"degisenYazi\" 
							onclick=\"window.location.href='../loginPage/loginPage.php'\">Giriş Yap</span></button>";
						}

						?>

					</form>
				</li>
			</ul>











		</div>	

	</nav>



</body>
</html>
<script>
	$(document).ready(function(){
		$(".animate").mouseenter(function(){
    // $(".animate").css("background-color", "yellow");
    if($(".animate").hasClass("shake"))
    {
    	$(".animate").removeClass("shake");
    }
    else
    	$(".animate").addClass('shake');});


		$(".animate").mouseleave(function(){
    // $(".animate").css("background-color", "lightgray");
    $(".animate").removeClass("shake");});});
</script>
<script>
	$(document).ready(function(){
		$(".degisenYazi").mouseenter(function(){
			$(".degisenYazi").fadeOut(900, function() {
				$(this).html("Kayıt Ol").fadeIn(900);
			});});
		$(".degisenYazi").mouseleave(function(){
			$(".degisenYazi").fadeOut(900, function() {
				$(this).html("Giriş Yap").fadeIn(900);
			});});
	});
</script>