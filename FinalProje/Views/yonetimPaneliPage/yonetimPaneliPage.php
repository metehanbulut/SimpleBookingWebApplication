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
        <link rel="stylesheet" type="text/css" href="/FinalProje/Views/yonetimPaneliPage/yonetimPaneliPage.css">
        <title>MetVago</title>
    </head>
    <body class="genislet">
        <?php 
        require_once "../navBar/navbar.php";
        require_once "../GenelStyleSheet/genelStyleSheet.php";
        require_once "../../ScriptSources/ortakKodlar/ortakKodlar.php";
        require_once "../../Controllers/yonetimPaneliPageController.php";
        ?>
        <div class="tabDiv">
            <ul class="nav nav-tabs" id="myTab">
                <li class="nav-item">
                    <a href="#home" class="nav-link active" data-bs-toggle="tab">Kullanıcılar</a>
                </li>
                <li class="nav-item">
                    <a href="#profile" class="nav-link" data-bs-toggle="tab">Güvenlik Soruları</a>
                </li>
                <li class="nav-item">
                    <a href="#messages" class="nav-link" data-bs-toggle="tab">Yetkilendirme</a>
                </li>
                <li class="nav-item">
                    <a href="#oteller" class="nav-link" data-bs-toggle="tab">Oteller</a>
                </li>
                <li class="nav-item">
                    <a href="#pansiyonlar" class="nav-link" data-bs-toggle="tab">Pansiyonlar</a>
                </li>

            </ul>
            <div class="tab-content">
                <div class="tab-pane fade show active" id="home">
                    <h4 class="mt-2 text-center">Sistemde Aktif Kullanıcılar  <button style="float:right; margin:0.5%;" class="btn btn-dark">Yeni Ekle</button></h4>
                    <table class="table table-bordered table-sm  text-center">
                        <thead class="table-success">
                            <?php $kullanicilar=getAllUsers(); ?>
                            <tr>
                                <th>Kullanici Adi</th>
                                <th>Ad</th>
                                <th>Soyad</th>
                                <th>Şifre</th>
                                <th>Mail Adresi</th>
                                <th>Güvenlik Sorusu</th>
                                <th>Güvenlik Sorusu Cevabı</th>
                                <th>Güncelle</th>
                                <th>Sil</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            for ($i=0; $i <count($kullanicilar); $i++) { 
                             echo "<tr>";
                             echo "<td>".$kullanicilar[$i]['Kullanici_Adi']."</td>";
                             echo "<td>".$kullanicilar[$i]['Ad']."</td>";
                             echo "<td>".$kullanicilar[$i]['Soyad']."</td>";
                             echo "<td>".$kullanicilar[$i]['Sifre']."</td>";
                             echo "<td>".$kullanicilar[$i]['Mail']."</td>";
                             echo "<td>".$kullanicilar[$i]['Guvenlik_Soru']."</td>";
                             echo "<td>".$kullanicilar[$i]['Guvenlik_Cevabi']."</td>";
                             echo "<td>"."<button class=\"btn btn-primary\">Güncelle</button>";
                             echo "<td>"."<button class=\"btn btn-danger\">Sil</button>";
                             echo "</tr>";
                         } ?>

                     </tbody>
                 </table>
             </div>
             <div class="tab-pane fade" id="profile">
               <h4 class="mt-2 text-center">Güvenlik Soruları Düzenle  <button style="float:right; margin:0.5%;" class="btn btn-dark">Yeni Ekle</button></h4>
               <table class="table table-bordered table-sm  text-center">
                <thead class="table-success">
                    <?php $guvSorular=getAllGuvSorular(); ?>
                    <tr>
                        <th>Güvenlik Sorusu</th>
                        <th>Güncelle</th>
                        <th>Sil</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    for ($i=0; $i <count($guvSorular); $i++) { 
                     echo "<tr>";
                     echo "<td>".$guvSorular[$i]['soru']."</td>";
                     echo "<td>"."<button class=\"btn btn-primary\">Güncelle</button>";
                     echo "<td>"."<button class=\"btn btn-danger\">Sil</button>";
                     echo "</tr>";
                 } ?>

             </tbody>
         </table>
     </div>
     <div class="tab-pane fade" id="messages">
        <h4 class="mt-2 text-center">Yetkilendirme Paneli</h4>
        <table class="table table-bordered table-sm  text-center">
            <thead class="table-success">
                <?php $kullanicilar=getAllUsers(); ?>
                <tr>
                    <th>Kullanici Adi</th>
                    <th>Ad</th>
                    <th>Soyad</th>
                    <th>Düzenle</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                for ($i=0; $i <count($kullanicilar); $i++) { 
                 echo "<tr>";
                 echo "<td>".$kullanicilar[$i]['Kullanici_Adi']."</td>";
                 echo "<td>".$kullanicilar[$i]['Ad']."</td>";
                 echo "<td>".$kullanicilar[$i]['Soyad']."</td>";
                 echo "<td>"."<button class=\"btn btn-info\">Yetkilendirme</button>";
                 echo "</tr>";
             } ?>

         </tbody>
     </table>
 </div>
 <div class="tab-pane fade" id="oteller">
    <h4 class="mt-2 text-center">Otel Düzenleme <button style="float:right; margin:0.5%;" class="btn btn-dark">Yeni Ekle</button></h4>
    <table class="table table-bordered table-sm  text-center">
        <thead class="table-success">
            <?php $oteller=getAllHotels(); ?>
            <tr>
                <th>Otel Adi</th>
                <th>Açıklama</th>
                <th>Düzenle</th>
                <th>Güncell</th>
                <th>Sil</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            for ($i=0; $i <count($oteller); $i++) { 
             echo "<tr>";
             echo "<td>".$otel[$i]['ad']."</td>";
             echo "<td>".$otel[$i]['aciklama']."</td>";
             echo "<td>"."<button class=\"btn btn-info\">Güncelle</button>";
             echo "<td>"."<button class=\"btn btn-Danger\">Sİl</button>";
             echo "</tr>";
         } ?>

     </tbody>
 </table>
</div>
<div class="tab-pane fade" id="pansiyonlar">
    <h4 class="mt-2 text-center">Pansiyon Düzenleme <button style="float:right; margin:0.5%;" class="btn btn-dark">Yeni Ekle</button></h4>
    <table class="table table-bordered table-sm  text-center">
        <thead class="table-success">
            <?php $pansiyonlar=getAllPansiyons(); ?>
            <tr>
                <th>Pansiyon Adi</th>
                <th>Açıklama</th>
                <th>Düzenle</th>
                <th>Güncell</th>
                <th>Sil</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            for ($i=0; $i <count($pansiyonlar); $i++) { 
             echo "<tr>";
             echo "<td>".$pansiyonlar[$i]['ad']."</td>";
             echo "<td>".$pansiyonlar[$i]['aciklama']."</td>";
             echo "<td>"."<button class=\"btn btn-info\">Güncelle</button>";
             echo "<td>"."<button class=\"btn btn-Danger\">Sİl</button>";
             echo "</tr>";
         } ?>

     </tbody>
 </table>
</div>
</div>
</div>

</body>
<footer>
</footer>
</html>