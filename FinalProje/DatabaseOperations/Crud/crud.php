<link rel="stylesheet" href="crud.css" type="text/css">
<?php 
require_once "../Connect/veritabaniBaglantisi.php";

if(isset($_POST['kaydetButonu'])){
	$kaydet=$db->prepare("INSERT into users set
		Kullanici_adi=:kullaniciAdi,
		Ad=:ad,
		Soyad=:soyad,
		Sifre=:sifre,
		Mail=:mail
		");

	$insert=$kaydet->execute(array(


		'kullaniciAdi'=> $_POST['kullaniciAdi'],
		'ad'=> $_POST['ad'],
		'soyad'=> $_POST['soyad'],
		'sifre'=> $_POST['sifre'],
		'mail'=> $_POST['mail']
	));
	if($insert)
	{
		header("Location:../../anaSayfaView/anaSayfa.php?durum=1");
		exit;
	}
	else
	{
		header("Location:../../anaSayfaView/anaSayfa.php?durum=0");
		exit;
	}

}
else if(isset($_POST['guncelleButonu']))
{

}
else{
	echo "<h1 class='baslik' >";
	echo "Veriler Yüklenemedi";
	echo "</h1>";
}



?>