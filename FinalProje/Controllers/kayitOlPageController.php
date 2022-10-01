<?php 
require_once(realpath(dirname(__FILE__) . '/..') . '/DatabaseOperations/Connect/veritabaniBaglantisi.php');

function kaydet($Body){
    $db=dbResetle();
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
            header("Location:../Views/loginPage/loginPage.php?islemBasarili=1");
            exit;
        }
        else
        {
            header("Location:../Views/loginPage/loginPage.php?islemBasarili=0");
            exit;
        }
    }
    else{
        echo "<h1 class='baslik' >";
        echo "Veriler Yüklenemedi";
        echo "</h1>";
    }

}

function guvSorulariCek(){
    $db=dbResetle();
    $data=$db->prepare("select * from guv_sorular");
    $data->execute();
    // $duzenlenenData=$data->fetch(PDO::FETCH_ASSOC);

    $result=array();

    while($duzenlenenData=$data->fetch(PDO::FETCH_ASSOC))
    {
        array_push($result, $duzenlenenData);
    }

    return $result;
}

?>
