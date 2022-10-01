<link rel="stylesheet" type="text/css" href="./crud.css">
<?php 
require_once "../Connect/veritabaniBaglantisi.php";

if(isset($_POST['kayitOlPage'])){

    $kaydet=$db->prepare("INSERT into users set
        Kullanici_adi=:kullaniciAdi,
        Ad=:ad,
        Soyad=:soyad,
        Sifre=:password,
        Mail=:mailAdress,
        Guvenlik_Cevabi=:guvCevap,
        Guvenlik_Soru_Id=:guvSoru
        ");

    $insert=$kaydet->execute(array(
        'kullaniciAdi'=> $_POST['kullaniciAdi'],
        'ad'=> $_POST['ad'],
        'soyad'=> $_POST['soyad'],
        'password'=> $_POST['password'],
        'mailAdress'=> $_POST['mailAdress'],
        'guvCevap'=> $_POST['guvCevap'],
        'guvSoru'=> $_POST['guvenlikSorusu']
    ));

    if($insert)
    {
        // header("Location:../../anaSayfaView/anaSayfa.php?durum=1");
        // exit;
    }
    else
    {
        // header("Location:../../anaSayfaView/anaSayfa.php?durum=0");
        // exit;
        echo "<h1 class='baslik' >";
        echo "Veriler Yüklenemedi";
        echo "</h1>";
    }
}
else{
    echo "<h1 class='baslik' >";
    echo "Veriler Yüklenemedi";
    echo "</h1>";
}

function pre($data) {
    print '<pre>' . print_r($data, true) . '</pre>';
}



?>