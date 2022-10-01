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
	<body class="background">
		<?php 
		require_once "../navBar/navbar.php";
		require_once "../GenelStyleSheet/genelStyleSheet.php";
		require_once "../../../FinalProje/ScriptSources/ortakKodlar/ortakKodlar.php";
		?>
	</body>
	<footer>
	</footer>
	</html>