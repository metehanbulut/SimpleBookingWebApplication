<?php 
$db=null;
try
{
	$db= new PDO("mysql:host=localhost;dbname=HotelAutomationSoftware;charset=utf8",'root','12345678');
// echo "Veritabanı bağlantısı başarılı ! ";
}
catch(PDOException $error)
{
	// echo ($error,"::Hata Mesajı ");
	echo $error->getMessage();
}


function dbResetle()
{
	$db=null;
	try
	{
		$db= new PDO("mysql:host=localhost;dbname=HotelAutomationSoftware;charset=utf8",'root','12345678');
		return $db;
// echo "Veritabanı bağlantısı başarılı ! ";
	}
	catch(PDOException $error)
	{
	// echo ($error,"::Hata Mesajı ");
		echo $error->getMessage();
		return null;
	}
	
}

?>