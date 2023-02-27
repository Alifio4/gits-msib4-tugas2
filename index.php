<?php
$number = 1;
$date = date('d-M-Y');
$nama = "Alifio Ibnu Nugroho";
$usia = "20";
$alamat = "Dsn Pancur 1, Manggar, Belitung Timur";
$profesi = "Mahasiswa";

$ig = "lavio_eternelle";
$email = "fionugroho4@gmail.com";
$tweet = "lavio_eternelle";
$FB = "Fio Nugroho";

$Univ = "Universitas Negeri Semarang";
$AlamatU = "Sekaran, Kec. Gn. Pati, Kota Semarang, Jawa Tengah 50229";

?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <title>WEB PERSONAL</title>
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
        <link rel="stylesheet" href="assets/css/Article-List.css">
        <link rel="stylesheet" href="assets/css/Footer-Basic.css">
        <link rel="stylesheet" href="assets/css/Footer-Clean.css">
        <link rel="stylesheet" href="assets/css/Highlight-Blue.css">
        <link rel="stylesheet" href="assets/css/Highlight-Phone.css">
        <link rel="stylesheet" href="assets/css/Login-Form-Clean.css">
        <link rel="stylesheet" href="assets/css/Navigation-Clean.css">
        <link rel="stylesheet" href="assets/css/styles.css">
    </head>
    <body>
    <nav class="navbar navbar-light navbar-expand-md sticky-top navigation-clean" style="background: var(--bs-green);color: #ffffff;">
        <div class="container"><a class="navbar-brand" href="#">Personal Web</a>
            <div class="collapse navbar-collapse" id="navcol-1" style="color: #ffffff;">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link active" href="home.html" style="color: #ffffff;"><?= $date ?></a></li>
            </ul>
            </div>
        </div>
        
        <h1></h1>
    </nav>
    <section class="highlight-phone">
        <div class="container">
        
            <div class="row">
            <img src="assets/img/IMG20200905122512_00.jpg" class="card-img-left" alt="Alifio" style="float:left;width:20%;height:20%;">
                <div class="col-md-8">
                    <div>
                    
                        <h1><strong>SALAM KENAL!</strong></h1>
                        <h2 style="color:grey"><strong>Saya Fio</strong></h2>
                        <p>Seorang mahasiswa program studi Sistem Informasi serta salah satu peserta program studi independen di GITS.id</p>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <section class="article-list">
        <div class="container">
            <div class="row articles" style="margin-right: 0px;margin-left: 0px;">
                <div class="col-sm-6 col-md-4 text-start item" style="background: linear-gradient(0deg, rgb(201,252,255), white);border-radius: 30px;height: 320.891px;min-height: 409px;padding-right: 20px;padding-left: 20px;padding-top: 20px;padding-bottom: 20px;">
                    <img class="img-fluid" src="assets/img/desk.jpg" style= "width:400px;height:200px;"></a>
                    <h3 class="text-start name" style="font-size: 25px;">Informasi Personal</h3>
                    <div>
                        <p> Nama: <?= $nama ?>
                        <br> Usia: <?= $usia ?>
                        <br> Alamat: <?= $alamat ?>
                        <br> Profesi: <?= $profesi ?></p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 text-start item" style="background: linear-gradient(0deg, rgb(201,252,255), white);border-radius: 30px;height: 320.891px;min-height: 409px;padding-right: 20px;padding-left: 20px;padding-top: 20px;padding-bottom: 20px;">
                <img class="img-fluid" src="assets/img/social-media-monitoring-739x524.jpg" style= "width:400px;height:200px;"></a>
                    <h3 class="text-start name" style="font-size: 25px;">Media Sosial</h3>
                    <div>
                    <p> Instagram: <?= $ig ?>
                    <br> Email: <?= $email ?>
                    <br> Twitter: <?= $tweet ?>
                    <br> Facebook: <?= $FB ?>
                    </p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 text-start item" style="background: linear-gradient(0deg, rgb(201,252,255), white);border-radius: 30px;height: 320.891px;min-height: 409px;padding-right: 20px;padding-left: 20px;padding-top: 20px;padding-bottom: 20px;">
                <img class="img-fluid" src="assets/img/2020-02-25.jpg" style= "width:400px;height:200px;"></a>
                    <h3 class="text-start name" style="font-size: 25px;">Universitas</h3>
                    <div>
                    <p> Nama: <?= $Univ ?>
                    <br> Alamat: <?= $AlamatU ?>
                    </p>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    
</div>
</div>
        
        
        <!-- <script src="" async defer></script> -->
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    </body>
    <footer class="footer-basic">
        <div class="social">Contact me</div>
        <div class="social"><a href="#"><i class="icon ion-social-instagram"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-facebook"></i></a></div>
        <p class="copyright" style="font-size: 14px;">Alifio© 2023</p>
    </footer>
</html>