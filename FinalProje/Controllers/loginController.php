<?php 
require_once(realpath(dirname(__FILE__) . '/..') . '/DatabaseOperations/Connect/veritabaniBaglantisi.php');
require_once(realpath(dirname(__FILE__) . '/..') . '/ScriptSources/ortakKodlar/ortakKodlar.php');

if(isset($_POST['loginButton']))
{


    $params=[
        "password"=>$_POST['password'],
        "userName"=>$_POST['userName']
    ];

    $kullaniciBilgileri=passwordKontrol($params);
    dataGuzelYazdir($kullaniciBilgileri);
    if($kullaniciBilgileri!=null)
        { /* GİRİŞ BAŞARILI*/
           if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
        else
        {
            session_destroy();
            session_start();
        }
        $kullaniciYetkileri=yetkiKontrol($kullaniciBilgileri);
        $_SESSION['kullaniciYetkileri']=$kullaniciYetkileri;
        $_SESSION['kullaniciBilgileri']=$kullaniciBilgileri;
        echo ">>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>";
        dataGuzelYazdir($_SESSION['kullaniciYetkileri']);
        dataGuzelYazdir($_SESSION['kullaniciBilgileri']);
        header("Location:../Views/anaSayfa/anasayfa.php");
        exit;
    }
    else{
        /* Giriş Başarısız*/
        header("Location:../Views/loginPage/loginPage.php?islemBasarili=0");
        exit;
    }
}





function passwordKontrol($gelenVeri){
    $db=dbResetle();
    $data=$db->prepare("select * from users u where u.Kullanici_Adi=:userName and u.Sifre=:password");
    $data->execute(
        ["userName"=>$gelenVeri['userName'],
        "password"=>$gelenVeri['password']
    ]);
    $result=array();
    while($duzenlenenData=$data->fetch(PDO::FETCH_ASSOC))
    {
        array_push($result, $duzenlenenData);
    }
    if(count($result)==1)
    {
     return $result;
 }
 else
 {
    return null;}
}

function yetkiKontrol($gelenVeri){
    $db=dbResetle();
    if(array($gelenVeri) && count($gelenVeri)==1)
    {
        $gelenVeri=$gelenVeri[0];
    }
    else
    {
        echo "<h1> HATA VAR </h1>";
    }
    $data=$db->prepare("select ytk.yetki_adi from users u inner join user_yetki uy on u.id=uy.user_id inner join yetkiler ytk on uy.yetki_id= ytk.id where u.id=:userId and ytk.yetki_adi='Administrator_yetkisi'");
    $data->execute(
        ['userId'=>$gelenVeri["id"],
    ]);
    $result=array();

    while($duzenlenenData=$data->fetch(PDO::FETCH_ASSOC))
    {
        array_push($result, $duzenlenenData);
    }

    return $result;
}

?>
